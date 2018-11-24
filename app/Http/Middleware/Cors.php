<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
            // Access-Control-Allow-Origin header is missing when running into a cors error on front end
            // * any outer domain may access my routes . 
            ->header('Access-Control-Allow-Origin', '*')
            // Access-Control-Allow-Methods allows certain methods 
            // Options is an extra request that the browser generates and is sent
            ->header('Access-Control-Allow-Methods', 'GET,POST,PUT,PATCH,DELETE,OPTIONS')
            // Access-Control-Allow-Headers allows certain headers  
            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Authorization');
    }
}
