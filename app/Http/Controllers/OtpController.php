<?php

namespace App\Http\Controllers;

use App\Mail\OtpSend;
use App\Mail\Register;
use App\Models\Otp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    //sendOtp
    public function sendOtp(Request $request){

        $code = rand(10000,99999);
        $otp = Otp::create([
            'email'=>$request->email,
            'code'=>$code
        ]);
        // Mail::to($otpRow->email)->send(new Register($otpRow->code));
        Mail::to($otp->email)->send(new OtpSend($otp));
        // return to_route('page@verifyOtpPage',$otpRow->id);
        return view('codeVerify',compact('otp'));
    }

    //verifyOtp
    public function verifyOtp(Request $request){

        $data = Otp::where('email',$request->email)->orderBy('id','desc')->first();
        if ($data->code<>$request->code) {
            return back()->with('error','Please Enter Valid Verification Code');
        }
        Otp::where('email',$data->email)->delete();
        return view('register',compact('data'));
    }
}
