<?php

namespace App\Http\Controllers;

use App\Proof;
use App\User;
use App\UserInfo;
use Auth;
use App\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    private $newfilename;

    public function __construct()
    {
        $this->newfilename = $this->generateRandomString();
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function index() {
        $proofResponse = "";

        if(Auth::check()) {
            $deposit = Deposit::where('user_id', Auth::user()->id)->get()->first();
            $sum = Deposit::where('user_id', Auth::user()->id);
        }

        return View('dashboard', compact('deposit','proofResponse'));
    }

    public function showDeposit() {
        return View('make-deposit');
    }

    public function proof() {
        return View('proof');
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
        $user_id = Auth::user()->id;
        $user_info = UserInfo::where('user_id', $user_id)->first();
        if(!empty($user_info)) {
            return View('profile-details', compact('user_info'));
        } else {
            return View('profile');
        }

    }

    public function storeProfile(Request $request) {
        $userinfo = new UserInfo();
        $data = Input::except('_token');
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();
        $userinfo::insert($data);

        $proofResponse = 2;
        return View('dashboard', compact('proofResponse'));
    }

    public function addProof(Request $request) {
        $path = $this->newfilename.".jpg";
        $this->uploadImage($_FILES, 'image');

        $proof = new Proof();
        $proof->name = $request->input('name');
        $proof->email = $request->input('email');
        $proof->image = $path;

        $proof->save();

        $proofResponse = 1;

        return View('/dashboard', compact('proofResponse'));

    }

    public function uploadImage($image, $name) {
        $errors = array();
        $file_name = $image[$name]['name'];
        $file_size = $image[$name]['size'];
        $file_tmp = $image[$name]['tmp_name'];
        $file_typ = $image[$name]['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $target_dir = storage_path('proof/');
        $temp = explode(".", $file_name);

        $filetoupload = $this->newfilename . '.' . end($temp);

        $ext = array('jpeg','jpg','png');

        if(in_array($file_ext, $ext) === false) {
            $errors[] = "File extention not allowed. Please upload either a JPG, JPEG or a PNG file";
        }

        if($file_size > 2097152) {
            $errors[] = "File size must not exceed 2 MB";
            return json_encode($errors);
        }
        if(empty($errors)) {
            move_uploaded_file($file_tmp, $target_dir.$filetoupload);
        } else {
            return json_encode($errors);
        }

    }

    public function showProof() {
        $proofs = Proof::orderBy('created_at', 'desc')->get();
        

        return View('view-proof',compact('proofs'));
    }

    public function users() {
        $users = User::orderBy('created_at', 'desc')->get();
        return View('users', compact('users'));
    }

    public function super() {
        return View('super');
    }

    public function details($id) {
        $user_info = UserInfo::where('user_id', $id)->first();
        $name = User::where('id', $id)->first();
        return View('user-details',compact('user_info', 'name'));
    }


}
