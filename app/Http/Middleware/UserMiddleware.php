<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty(Session::get('user'))) {
            return $next($request)->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
          }else{
            return redirect('account/login')->with('error','You must login first!');   
          }
    }
}
