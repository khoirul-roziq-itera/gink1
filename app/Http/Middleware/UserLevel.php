<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // Jika level user mempunyai akses
        if (in_array($request->user()->level, $levels)) {
            return $next($request);
        }
        // jika level user tidak mempunyai akses
        return redirect('/login');
    }
}
