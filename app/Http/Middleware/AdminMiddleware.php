<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminMiddleware
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
        if(Auth::user()->usertype=='admin'){
            return redirect('dashboard')->with('success', 'Welcome! You are login as participants!');
        }else{
            return redirect('dashboard')->with('success', 'Welcome! You are login as participants!');
        }
    }
}
