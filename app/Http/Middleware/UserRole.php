<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Auth;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){   
            return $next($request); 
            // return redirect()->route('login');     
        }
        else {
            // return $next($request);
            return redirect()->route('login');
        }
    }
    //     // if(Auth::check()){    
    //     // $arr=[
    //     //     'email'=>$Request['Email'],
    //     //     'password'=>$Request['password']
    //     // ];
    //     // if(Auth::attempt($arr)){
    //     //     return $next($request);
    //     // }else{
    //     //     return redirect()->route('login'); 
    //     // }
    //     // }
        
    // }
    // public function handle($request, Closure $next, $guard = null)
    // {
    //     // dd(Auth::guard($guard)->check());
    //     if (Auth::guard($guard)->check()) {
    //         // dd(Auth::guard($guard)->check());
    //         return redirect(RouteServiceProvider::HOME);
    //     }

    //     return $next($request);

    // }
}
