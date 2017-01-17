<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return View('index');
    }

    public function about() {
        return View('about');
    }

    public function services() {
        return View('services');
    }

    public function faq() {
        return View('faq');
    }

    public function contact() {
        return View('contact');
    }
}
