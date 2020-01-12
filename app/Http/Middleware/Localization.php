<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Localization
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

        \App::setlocale(session('lang', config('app.local')));
           
        return $next($request);
    }
}
