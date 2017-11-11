<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IT_HaNoi
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
        /**
        1:bo_phan_IT_HN
        2:bo_phan_IT_DN
        */
        if(!Auth::check()){
             return redirect()->route('login');
        }
        if(Auth::user()->bo_phan_IT != 1){
                return redirect()->route('login');
        }
           
        
        return $next($request);
    }
}
