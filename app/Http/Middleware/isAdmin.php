<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function handle(Request $request, Closure $next)
    {
        $this->user = auth()->user();
        if ($this->user->isAdmin()) {
            return $next($request);
        } else {
            return redirect()->route('auth.error');
        }
    }
}
