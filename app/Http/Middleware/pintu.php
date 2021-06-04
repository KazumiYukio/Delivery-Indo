<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class pintu
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
        if(session('success')){
            return redirect('paketID');
        }
        
        return $next($request);
    }
}
