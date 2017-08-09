<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Input;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Input::get('key') && Input::get('key') == 'test') {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'You are not authorized.');
    }
}
