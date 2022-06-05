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
    
}
