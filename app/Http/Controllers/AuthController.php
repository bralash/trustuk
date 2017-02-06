<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\UserInfo;
use App\User;
use App\Payment;
use Auth;
use App\Deposit;
use App\Client;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\In;

class AuthController extends Controller
{
    public function loginIndex() {
        return View('login');
    }

    public function registerIndex() {
        if(Auth::check()) {
            return Redirect::to('/admin');
        } else {
            return View('register');
        }
    }

    public function depositIndex() {
        if(Auth::check()) {
            return Redirect::to('/admin');
        } else {
            return View('deposit');
        }
    }

    public function detailsIndex() {
        return View('details');
    }

    public function login(Request $request) {
        $userData = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if(Auth::attempt($userData)) {
            return Redirect::to('/admin');
        } else {
            return Redirect::to('/auth/login');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return Redirect::to('/auth/login');
    }

    public function register(Request $request) {
        $user = new User();

        $user->name = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->referral = $request->input('referral');

        $user->save();

        $userData = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if(Auth::attempt($userData)) {
            return Redirect::to('/auth/deposit');
        } else {
            return Redirect::to('/auth/register');
        }

    }

    public function deposit(Request $request) {
        $cps = new Payment();
        $cps->Setup('082349C109c41ec80dCac85C3ff742ecA377CACDBc4832493322C62CF8BbF11d','49f40467efe71cee035f9f6e4d3cfcff5c8fe9523c0659e6b25880f5dfe7ea5e');

        $amount = $request->input('amount');
        $item = $request->input('plan');
        $payment_method = $request->input('plan');
        $req = array(
            'amount' => $amount,
            'currency1' => 'USD',
            'currency2' => 'BTC',
            'address' => '331FqAmp4GPQ9TNrvR56XdchhkodJX9QGG ',
            'item_name' => $item,
            'ipn_url' => 'https://trustukfundgroup.com/notify',
            'ipn_mode' => 'HMAC'
        );

        $result = $cps->CreateTransaction($req);
        if($result['error'] == 'ok') {
            $le = php_sapi_name() == 'cli' ? "\n" : '<br />';
            $txn_id = $result['result']['txn_id'];
            $amt_to_send = sprintf('%.08f', $result['result']['amount']);
            $status_url = $result['result']['status_url'];

            return Redirect::to($status_url);

//            return view('status', ['txn_id' => $txn_id, 'amount' => $amt_to_send, 'status_url' => $status_url]);

//            print 'Transaction created with ID: ' .$result['result']['txn_id'].$le;
//            print 'Buyer should send '.sprintf('%.08f', $result['result']['amount']).'BTC'.$le;
//            print 'Status URL: '.$result['result']['status_url'].$le;
        } else {
            print 'Error: '.$result['error']."\n";
        }
    }

    

    public function details(Request $request) {
        $userinfo = new UserInfo();
        $data = Input::except('_token');
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $userinfo::insert($data);
        return Redirect::to('/admin');
    }

    public function notify() {

        $cp_merchant_id = '42863d0d55797c9a02fa4318dae6a319';
        $cp_ipn_secret = 'trustukfund';
        $cp_debug_email = 'emmanuelasaber@gmail.com';

        //These would normally be loaded from your database, the most common way is to pass the Order ID through the 'custom' POST field.
        $order_currency = 'USD';
        $order_total = 10.00;

        function errorAndDie($error_msg) {
            global $cp_debug_email;
            if (!empty($cp_debug_email)) {
                $report = 'Error: '.$error_msg."\n\n";
                $report .= "POST Data\n\n";
                foreach ($_POST as $k => $v) {
                    $report .= "|$k| = |$v|\n";
                }
                mail($cp_debug_email, 'CoinPayments IPN Error', $report);
            }
            die('IPN Error: '.$error_msg);
        }

        if (!isset($_POST['ipn_mode']) || $_POST['ipn_mode'] != 'hmac') {
            errorAndDie('IPN Mode is not HMAC');
        }

        if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
            errorAndDie('No HMAC signature sent.');
        }

        $request = file_get_contents('php://input');
        if ($request === FALSE || empty($request)) {
            errorAndDie('Error reading POST data');
        }

        if (!isset($_POST['merchant']) || $_POST['merchant'] != trim($cp_merchant_id)) {
            errorAndDie('No or incorrect Merchant ID passed');
        }

        $hmac = hash_hmac("sha512", $request, trim($cp_ipn_secret));
        if ($hmac != $_SERVER['HTTP_HMAC']) {
            errorAndDie('HMAC signature does not match');
        }

        // HMAC Signature verified at this point, load some variables.

        $txn_id = $_POST['txn_id'];
        $item_name = $_POST['item_name'];
        $item_number = $_POST['item_number'];
        $amount1 = floatval($_POST['amount1']);
        $amount2 = floatval($_POST['amount2']);
        $currency1 = $_POST['currency1'];
        $currency2 = $_POST['currency2'];
        $status = intval($_POST['status']);
        $status_text = $_POST['status_text'];

        //depending on the API of your system, you may want to check and see if the transaction ID $txn_id has already been handled before at this point

        // Check the original currency to make sure the buyer didn't change it.
        if ($currency1 != $order_currency) {
            errorAndDie('Original currency mismatch!');
        }

        // Check amount against order total
        if ($amount1 < $order_total) {
            errorAndDie('Amount is less than order total!');
        }

        if ($status >= 100 || $status == 2) {
            // payment is complete or queued for nightly payout, success
        } else if ($status < 0) {
            //payment error, this is usually final but payments will sometimes be reopened if there was no exchange rate conversion or with seller consent
        } else {
            //payment is pending, you can optionally add a note to the order page
        }
        die('IPN OK');

    }
}
