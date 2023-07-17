<?php

namespace App\Http\Middleware\Clients;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->guest()) {
            return redirect('Clients/AuthU/login/')->withErrors(['message' => 'Please log in to proceed.']);
        }

        return $next($request);
    }
}
