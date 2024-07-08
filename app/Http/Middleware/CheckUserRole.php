<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Get the authenticated user
        $user = $request->user();

        // Check if user is authenticated and has the required role
        if ($user && in_array($user->level, $roles)) {
            return $next($request);
        }

        // Return 403 Forbidden if user doesn't have the required role
        return response()->view('errors.403')->setStatusCode(403);
    }
}
