<?php

namespace App\Http\Controllers;

use App\Models\Otp;
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
    public function verifyOtpPage(Otp $id){
        // $otp = Otp::findOrFail($id);
        return view('codeVerify',['otp'=>$id]);
    }
    //home
    public function home(){
        return view('home');
    }
}
