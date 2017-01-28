<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Deposit;
use App\Client;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\In;

class AuthController extends Controller
{
    public function loginIndex() {
        return View('login');
    }

    public function registerIndex() {
        return View('register');
    }

    public function depositIndex() {
        return View('deposit');
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
        $deposit = new Deposit();

        $deposit->plan = $request->input('deposit');
        $deposit->payment_method = $request->input('payment_method');
        $deposit->amount = $request->input('amount');
        $deposit->user_id = $request->input('user_id');

        $deposit->save();

        return Redirect::to('/details');

    }
}
