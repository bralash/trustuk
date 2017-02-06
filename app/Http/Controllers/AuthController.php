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
use Illuminate\Validation\Rules\In;

class AuthController extends Controller
{
    public function loginIndex() {
        return View('login');
    }

    public function registerIndex() {
        if(Auth) {
            return Redirect::to('/admin');
        } else {
            return View('register');
        }
    }

    public function depositIndex() {
        if(Auth) {
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

        $req = array(
            'amount' => 10.00,
            'currency1' => 'USD',
            'currency2' => 'BTC',
            'address' => '331FqAmp4GPQ9TNrvR56XdchhkodJX9QGG ',
            'item_name' => 'Test Item',
            'ipn_url' => 'https://trustukfundgroup.com/notify'
        );

        $result = $cps->CreateTransaction($req);
        if($result['error'] == 'ok') {
            $le = php_sapi_name() == 'cli' ? "\n" : '<br />';
            print 'Transaction created with ID: ' .$result['result']['txn_id'].$le;
            print 'Buyer should send '.sprintf('%.08f', $result['result']['amount']).'BTC'.$le;
            print 'Status URL: '.$result['result']['status_url'].$le;
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
}
