<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    //Register
    public function register(RegisterRequest $request){
        $validated = $request->validated();
        User::create([
            'email'=>$validated['email'],
            'password'=>Hash::make($validated['password']),
        ]);
        return to_route('page@loginPage')->with('success','successfuly registered');
    }

    //Login
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email',$request->email)->first();

        if(Hash::check($request->password,$user->password)){
            // session()->put('login',true);
            // session()->put('user_id',$user->id);
            Auth::login($user);
            return to_route('page@home')->with('success','successfully logined');
        } else {
            return back()->with('please enter valid password');
        }
    }

    //Logout
    public function logout(){
        // session()->forget([
        //     'login','user_id'
        // ]);
        Auth::logout();
        return to_route('page@loginPage')->with('successfully logout');
    }
}
