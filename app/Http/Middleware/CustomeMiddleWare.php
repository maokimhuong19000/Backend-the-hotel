<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomeMiddleware { // User this clase to register in kernel file 
    /** 
     * Check incoming requests
     */
    public function handle(Request $request, Closure $next) {
        if(!Auth::check())   return redirect('/login'); // your custome blade here .
        else return $next($request) ;
    }
}