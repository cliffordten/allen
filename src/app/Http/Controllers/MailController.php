<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MailController extends Controller
{
    //
    function verifyAccount(Request $request){
        $userInfo = User::where('email', '=', $request->email)->first();
        
        if(!$userInfo){
            return view('mails.welcome', ['userData'=>null, 'fail'=>'User with this email "'.$request->email.'" do not exist!', 'success'=>null]);
        }

        $userInfo->isVerified = true;
        $sucess = $userInfo->save();

        if($sucess){
            return view('mails.welcome', ['userData'=>$userInfo, 'success'=>'Account Verified!', 'fail'=>null]);
        }

        return view('mails.welcome', ['userData'=>null, 'fail'=>'omething went wrong, try again later', 'success'=>null]);
    }
}
