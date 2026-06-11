<?php

use App\Http\Middleware\CheckSiteMaintenance;
use App\Http\Middleware\EnsureAdminIsOwner;
use App\Http\Middleware\SecurityHeaders;
use App\Http\Middleware\TrackVisitor;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectGuestsTo(fn ($request) => $request->is('admin*') ? route('admin.login') : route('home'));
        $middleware->append(SecurityHeaders::class);
        $middleware->append(CheckSiteMaintenance::class);
        $middleware->appendToGroup('web', TrackVisitor::class);
        $middleware->alias([
            'admin.owner' => EnsureAdminIsOwner::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
