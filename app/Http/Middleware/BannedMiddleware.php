<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth as  Auth;

class BannedMiddleware
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

        if (Auth::user()->banned)
        {
            Auth::logout();
            return redirect('/login')->withErrors(['banned' => 'Sorry, your account has locked.']);
        }
        return $next($request);
    }
}
