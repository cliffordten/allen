<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/market-capital-bar', function () {
    return view('market-capital-bar');
});
Route::get('/market-capital', function () {
    return view('market-capital');
});
Route::get('/markets', function () {
    return view('markets');
});
Route::get('/news-details', function () {
    return view('news-details');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/wallet', function () {
    return view('wallet');
});
Route::get('/reset', function () {
    return view('reset');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/lock', function () {
    return view('lock');
});
Route::get('/otp-number', function () {
    return view('otp-number');
});
Route::get('/otp-verify', function () {
    return view('otp-verify');
});
Route::get('/notfound', function () {
    return view('notfound');
});
