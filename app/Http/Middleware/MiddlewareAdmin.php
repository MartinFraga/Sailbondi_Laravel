<?php

namespace App\Http\Middleware;

use Closure;

class MiddlewareAdmin
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
        if(!$request->user()){
            return redirect()->route('login');
        } else if (!($request->user()->es_admin === 'S')){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
