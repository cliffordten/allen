<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

    function index(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('index', $sessionData);
    }

    function market(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('markets', $sessionData);
    }

    function marketCapital(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('market-capital', $sessionData);
    }

    function marketCapitalBar(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('market-capital-bar', $sessionData);
    }

    function newsDetails(){
        $sessionData = ['userData'=>User::where('id', '=', session('AuthenticatedUser'))->first()];
        return view('news-details', $sessionData);
    }

    function login(){
        return view('login');
    }

    function signup(){
        return view('signup');
    }

    function render404(){
        return abort(404);
    }

    function logoutUser(){
        if(session()->has('AuthenticatedUser')){
            session()->pull('AuthenticatedUser');
        }
        return redirect('/login');
    }

    function saveUserInfo(Request $request){

        $request->validate([
            'fullName'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'isTermsChecked'=>'required',
        ]);

        if($request->password !== $request->confirmPassword){
            return back()->with("fail", "Passwords do not match!");
        }

        $user = new User;
        $user->fullName = $request->fullName;
        $user->email = $request->email;
        $user->phone="";
        $user->language="";
        $user->currency="";
        $user->profile="";
        $user->password = Hash::make($request->password);
        $user->isTermsChecked = $request->isTermsChecked == 'on'? true: false;
        $sucess = $user->save();

        if($sucess){
            return back()->with("success", "Account Created! You can now proceed to login");
        }

        return back()->with("fail", "Something went wrong, try again later");
    }

    function loginUser(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        $userInfo = User::where('email', '=', $request->email)->first();

        if(!$userInfo){
            return back()->with("fail", "User with this email do not exist!");
        }

        if(!(Hash::check($request->password, $userInfo->password))){
            return back()->with("fail", "Password incorrect!");
        }

        $request->session()->put('AuthenticatedUser', $userInfo->id);

        if($userInfo->isAdmin){
            return redirect('admin/dashboard');
        }

        return redirect('user/profile');
    }
}
