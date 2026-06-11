<?php

namespace App\Http\Middleware;

use App\Support\SiteSettings;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSiteMaintenance
{
    public function handle(Request $request, Closure $next): Response
    {
        if (app(SiteSettings::class)->get('maintenance_enabled') === '1'
            && ! $request->is('admin*')
            && ! auth('admin')->check()) {
            return response()->view('errors.maintenance', status: 503);
        }

        return $next($request);
    }
}
