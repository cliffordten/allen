<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transactions;
use App\Models\Wallets;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    function userProfile(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('user.profile', $sessionData);
    }

    function userWallet(){

        if(!session('transactionInfo')){
            $transactionInfo = null;
            $transactionInfo['currency'] = "BTC";

            Session::put('transactionInfo', $transactionInfo);
        }

        $wallets = Wallets::where('userId', '=', session('AuthenticatedUser'))->get();
        $transactions = Transactions::where('userID', '=', session('AuthenticatedUser'))->get();

        $walletObj = null;
        $transactionObj = null;

        foreach ($wallets as $val) {
            $walletObj[$val->currency] = $val;
            $transactionObj[$val->currency] = $transactions -> filter(function($currentVal){
                                                return $currentVal["currency"] == $val->currency;
                                            }) -> values();
        }

        // var_dump($transactionObj);
        // return;

        $sessionData = [
            'userData'=>User::where('id', '=', session('AuthenticatedUser'))->first(), 
            'wallets'=> $walletObj,
            'transactions'=> $transactions
        ];

        return view('user.wallet', $sessionData);
    }

    function userSettings(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('user.settings', $sessionData);
    }

    function updateUserProfile(Request $request){

        $request->validate([
            'email'=>'required|email',
        ]);

        if(!$request->firstName){
            return back()->with("fail", "First name is required!");
        }

        if($request->phone && !is_numeric($request->phone)){
            return back()->with("fail", "Phone Number must be a number!");
        }

        $userInfo = User::where('id', '=', session('AuthenticatedUser'))->first();

        if($request->email != $userInfo->email){
            $userExist = User::where('email', '=', $userInfo->email)->first();
            if($userExist){
                return back()->with("fail", "Email already taken!");
            }
        }

        $fileLink = '';
        $allowedExtensions = ["svg", 'png', 'jpg', 'jpeg'];
        if($request->hasFile('profile')){

           $fileDestination = 'public/images/profiles';            
           $file = $request->file('profile');            
           $fileName = $file->getClientOriginalName();    
           $fileExtension = $file->getClientOriginalExtension();
           
           if(!in_array($fileExtension, $allowedExtensions)){
                return back()->with("fail", "Invalid image, Image extension '" . $fileExtension . "' is not allowed");
           }

           $filePath = $file->storeAs($fileDestination, $fileName);
           
           $fileLink = "/storage/images/profiles/" . $fileName;
           $userInfo->profile = $fileLink;
        }

        
        $userInfo->fullName = $request->firstName . " " . $request->lastName;
        $userInfo->email = $request->email;
        $userInfo->phone = $request->phone ? $request->phone : "";
        $userInfo->language = $request->language ? $request->language : "";
        $userInfo->currency = $request->currency ? $request->currency : "";
        $sucess = $userInfo->save();

        return back()->with("success", "Account info updated!");;
    }
    
    function changeUserPassword(Request $request){

        $request->validate([
            'password'=>'required|min:8',
            'newPass'=>'required|min:8',
            'confirmPass'=>'required|min:8',
        ]);

        if($request->newPass !== $request->confirmPass){
            return back()->with("fail", "New Passwords do not match!");
        }

        $userInfo = User::where('id', '=', session('AuthenticatedUser'))->first();

        if(!(Hash::check($request->password, $userInfo->password))){
            return back()->with("fail", "Old Password incorrect!");
        }

        
        $userInfo->password = Hash::make($request->newPass);
        $sucess = $userInfo->save();

        return back()->with("success", "Password updated!");;
    }

    function createUserWallet($walletType){

        $wallet = new Wallets;
        $wallet->userId = session('AuthenticatedUser');
        $wallet->currency = $walletType;
        $wallet->amount = '0.0000000';
        $wallet->userAddress = (string) Str::uuid();
        $sucess = $wallet->save();

        if($sucess){
            return back()->with("success", $walletType . " Wallet Created! You can now start making transations");
        }

        return back()->with("fail", "Something went wrong, try again later");
    }

    function makeTransaction($currencyType, $transactionType){
        $transactionInfo = null;
        $transactionInfo['currency'] = $currencyType;
        $transactionInfo['type'] = $transactionType;
        $transactionInfo[$currencyType] = true;

        Session::put('transactionInfo', $transactionInfo);
        return back();
    }

    function selectCurrency(Request $request){
        $transactionInfo = null;
        $transactionInfo['currency'] = $request->currency;

        Session::put('transactionInfo', $transactionInfo);

        return back();
    }

    function processTransaction(Request $request){
        // if(session()->has('transactionInfo')){
        //     session()->pull('transactionInfo');
        // }
        return $request -> input();
    }
}
