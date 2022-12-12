<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    //LoginPage
    public function loginPage(){
        return View::make('login');
    }
    //RegisterPage
    public function registerPage(){
        return view('register');
    }
    //sendOtpPage
    public function sendOtpPage(){
        return View::make('sentCode');
    }
    //verifyOtpPage
    public function verifyOtpPage(){
        return view('codeVerify');
    }
    //home
    public function home(){
        return view('home');
    }
}
