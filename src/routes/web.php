<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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




Route::group(['middleware'=>['ClearBrowserCache']], function(){
    Route::get('/', [MainController::class, 'index']);
    Route::get('/market-capital-bar', [MainController::class, 'marketCapitalBar']);
    Route::get('/market-capital', [MainController::class, 'marketCapital']);
    Route::get('/markets', [MainController::class, 'market']);
    Route::get('/news-details', [MainController::class, 'newsDetails']);
});


Route::post('/saveUserInfo', [MainController::class, 'saveUserInfo'])->name('saveUserInfo');
Route::post('/loginUser', [MainController::class, 'loginUser'])->name('loginUser');
Route::get('/logoutUser', [MainController::class, 'logoutUser'])->name('logoutUser');


Route::group(['middleware'=>['AuthUser']], function(){
    Route::get('/login', [MainController::class, 'login']);
    Route::get('/signup', [MainController::class, 'signup']);

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);

    Route::get('/user/profile', [UserController::class, 'userProfile']);
    Route::get('/user/wallet', [UserController::class, 'userWallet']);
    Route::get('/user/settings', [UserController::class, 'userSettings']);
});


Route::get('/reset', function () {
    return view('reset');
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
