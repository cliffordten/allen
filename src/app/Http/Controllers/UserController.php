<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    function userProfile(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('user.profile', $sessionData);
    }

    function userWallet(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
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
    
}
