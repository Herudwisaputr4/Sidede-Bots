<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAutenticate
{

    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->guard('master-admin')->check() && !auth()->guard('admin')->check()) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu');
        }


        return $next($request);
    }
}
