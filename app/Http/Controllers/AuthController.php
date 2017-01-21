<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Client;
use Illuminate\Http\Request;
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

    public function register(Request $request) {
        $client = new Client();

        $client->fullname = $request->input('fullname');
        $client->email = $request->input('email');
        $client->referral = $request->input('referral');

        $saved = $client->save();

        if(!$saved) {
            return redirect('/auth/register');
        } else {
            return redirect('/auth/deposit');
        }
    }

    public function deposit(Request $request) {
        $deposit = new Deposit();

        $deposit->plan = $request->input('deposit');
        $deposit->payment_method = $request->input('payment_method');
        $deposit->amount = $request->input('amount');

        $saved = $deposit->save();

        if(!$saved) {
            return redirect('/auth/deposit');
        } else {
            return redirect('/auth/details');
        }
    }
}
