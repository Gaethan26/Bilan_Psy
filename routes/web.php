<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//login
Route::get('/', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);

//reset password
Route::get('/reset-password', function() {
    return view('reset-password');
});

//register
Route::get('/create-account', function() {
    return view('create-account');
});

Route::post('/create-account', [UserController::class, 'store']);

Route::get('/create-account-success', function() {
    return view('create-account-success');
});

//dashboard
Route::get('/dashboard', function() {
    return view('dashboard');
});