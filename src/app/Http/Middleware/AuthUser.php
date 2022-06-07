<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transactions;
use App\Models\Wallets;
use Illuminate\Support\Facades\Session;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('AuthenticatedUser') && ($request->path() != 'login' && $request->path() != 'signup' )){
            return redirect('login')->with('fail', 'You must be logged in to access this route');
        }

        if(session()->has('AuthenticatedUser')){
            $userInfo = User::where('id', '=', session('AuthenticatedUser'))->first();

            $wallets = Wallets::where('userId', '=', session('AuthenticatedUser'))->get();
            $transactions = Transactions::where('userID', '=', session('AuthenticatedUser'))->get();

            $walletObj = null;

            foreach ($wallets as $val) {
                $walletObj[$val->currency] = $val;
            }

            if(!session('transactionInfo')){
                $transactionInfo = null;
                $transactionInfo['currency'] = "BTC";
                $transactionInfo['displayAmount'] = isset($walletObj["BTC"]) ? $walletObj["BTC"]['amount'] . " BTC" : "0.00000 BTC";

                Session::put('transactionInfo', $transactionInfo);
            }

            if($userInfo && $userInfo->isAdmin && str_contains($request->path(), 'user')){
                return redirect('admin/dashboard');
            }

            if($userInfo && !$userInfo->isAdmin && str_contains($request->path(), 'admin')){
                return redirect('user/profile');
            }

            if($userInfo && ($request->path() == 'login' || $request->path() == 'signup')){
                return back();
            }
            
        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma', 'no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
        
    }
}
