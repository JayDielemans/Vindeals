<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roleCheck): Response
    {
        $user = Auth::User();

        if (!$user) {
            abort(403, 'Niet geautoriseerd.');
        }

        if (method_exists($user, $roleCheck) && $user->$roleCheck()) {
            return $next($request);
        }

        abort(403, 'Geen toegang.');
    }
}
