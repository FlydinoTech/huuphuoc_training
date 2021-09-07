<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class isAdmin
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
    	if ((auth()->user()->category_user_id == 1) || (auth()->user()->category_user_id == 2)) {
    		return $next($request);
    	} else {
            return redirect()->route('auth.error');
        }
       
    }
}
