<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login(){
        \Log::info("test");
        return view('login');
    }

    function signup(){
        return view('signup');
    }

    function saveUserInfo(Request $request){
        return $request->input();
    }
}
