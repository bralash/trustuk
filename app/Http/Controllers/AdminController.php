<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use Auth;
use App\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    //

    public function index() {
        $amount = "";

        if(Auth::check()) {
            $deposit = Deposit::where('user_id', Auth::user()->id)->get()->first();
            $sum = Deposit::where('user_id', Auth::user()->id);
        }

        return View('dashboard', compact('deposit'));
    }

    public function showDeposit() {
        return View('make-deposit');
    }

    public function deposit(Request $request) {
        $deposit = new Deposit();
        $deposit->plan = $request->input('plan');
        $deposit->payment_method = $request->input('payment_method');
        $deposit->amount = $request->input('amount');
        $deposit->user_id = Auth::user()->id;

        $deposit->save();

        Redirect::to('/admin/deposit');
    }

    public function profile() {
        $user_info = UserInfo::where('user_id', Auth::user()->id)->get()->first();
        return View('profile', compact('user_info'));
    }

    public function storeProfile(Request $request) {
        $userinfo = new UserInfo();
        $data = Input::except('_token');
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $userinfo::insert($data);
        return Redirect::to('/admin');
    }


}
