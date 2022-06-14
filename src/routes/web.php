<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MailController;
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
    Route::get('/notfound', [MainController::class, 'render404']);
});


Route::post('/updateUserWallet/{userId}', [AdminController::class, 'updateUserWallet'])->name('updateUserWallet');
Route::post('/processUserTransaction/{transId}', [AdminController::class, 'processUserTransaction'])->name('processUserTransaction');
Route::post('/updateUserProfileInfo/{userId}', [AdminController::class, 'updateUserProfileInfo'])->name('updateUserProfileInfo');

Route::post('/selectCurrency', [UserController::class, 'selectCurrency'])->name('selectCurrency');
Route::post('/processTransaction', [UserController::class, 'processTransaction'])->name('processTransaction');
Route::get('/makeTransaction/{currencyType}/{transactionType}', [UserController::class, 'makeTransaction'])->name('makeTransaction');
Route::post('/createUserWallet/{walletType}', [UserController::class, 'createUserWallet'])->name('createUserWallet');
Route::post('/changeUserPassword', [UserController::class, 'changeUserPassword'])->name('changeUserPassword');
Route::post('/updateUserProfile', [UserController::class, 'updateUserProfile'])->name('updateUserProfile');

Route::post('/saveUserInfo', [MainController::class, 'saveUserInfo'])->name('saveUserInfo');
Route::post('/loginUser', [MainController::class, 'loginUser'])->name('loginUser');
Route::get('/logoutUser', [MainController::class, 'logoutUser'])->name('logoutUser');

Route::get('/account/verify', [MailController::class, 'verifyAccount'])->name('verifyAccount');

Route::group(['middleware'=>['AuthUser']], function(){
    Route::get('/login', [MainController::class, 'login']);
    Route::get('/signup', [MainController::class, 'signup']);

    Route::get('/admin/transaction/{transId}', [AdminController::class, 'viewTransaction'])->name('viewTransaction');
    Route::get('/admin/editUser/{userId}', [AdminController::class, 'editUser'])->name('editUser');
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('/admin/profile', [AdminController::class, 'adminProfile']);
    Route::get('/admin/transactionHistory', [AdminController::class, 'adminTransactionHistory']);

    Route::get('/user/profile', [UserController::class, 'userProfile']);
    Route::get('/user/wallet', [UserController::class, 'userWallet']);
    Route::get('/user/transactionHistory', [UserController::class, 'userTransactionHistory']);
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

