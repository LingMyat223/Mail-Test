<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //LoginPage
    public function loginPage(){
        return view('login');
    }
    //RegisterPage
    public function registerPage(){
        return view('register');
    }
    //sendOtpPage
    public function sendOtpPage(){
        return view('sentCode');
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
