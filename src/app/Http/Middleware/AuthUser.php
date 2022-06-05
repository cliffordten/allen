<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

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

            if($userInfo->isAdmin && str_contains($request->path(), 'user')){
                return redirect('admin/dashboard');
            }

            if(!$userInfo->isAdmin && str_contains($request->path(), 'admin')){
                return redirect('user/dashboard');
            }

            if($request->path() == 'login' || $request->path() == 'signup'){
                return back();
            }
            
        }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma', 'no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
        
    }
}
