<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/','loginPage')->name('page@/');
Route::controller(PageController::class)->group(function(){
    Route::get('loginPage','loginPage')->name('page@loginPage');
    Route::get('registerPage','registerPage')->name('page@registerPage');
    Route::get('sendOtpPage','sendOtpPage')->name('page@sendOtpPage');
    Route::get('verifyOtpPage/{id}','verifyOtpPage')->name('page@verifyOtpPage');
    Route::get('home','home')->name('page@home')->middleware('auth');
});

Route::controller(OtpController::class)->group(function(){
    Route::post('sendOtp','sendOtp')->name('otp@send');
    Route::post('verifyOtp','verifyOtp')->name('otp@verify');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('register','register')->name('auth@register');
    Route::post('login','login')->name('auth@login');
    Route::get('logout','logout')->name('auth@logout');
});
