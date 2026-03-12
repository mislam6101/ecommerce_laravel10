<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->status == 0) {

            auth()->logout();

            return redirect('/login')
                ->with('error', 'Your account is inactive. Contact admin.');
        }

        return $next($request);
    }
}
