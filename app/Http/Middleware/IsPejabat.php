<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPejabat
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
        if(auth()->user() && auth()->user()->level == 'pejabat')
        {
            return $next($request);
        }
        abort(403);
    }
}
