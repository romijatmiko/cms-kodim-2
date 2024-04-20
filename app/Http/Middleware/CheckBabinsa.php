<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBabinsa
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
<<<<<<< HEAD
        if ($request->user() && $request->user()->role !== 'Kodim') {
=======
        if ($request->user() && $request->user()->role !== 'Babinsa') {
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
            Auth::logout(); // Logout user
            return redirect()->route('login')->with('alert', 'You are not authorized.'); // Redirect to login with alert
        }

        return $next($request);
    }
}
