<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminIsOwner
{
    public function handle(Request $request, Closure $next): Response
    {
        abort_unless(auth('admin')->user()?->isOwner(), 403);

        return $next($request);
    }
}
