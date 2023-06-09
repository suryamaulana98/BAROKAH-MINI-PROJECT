<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user()->role != $role) {
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}
