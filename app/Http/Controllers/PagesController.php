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
}