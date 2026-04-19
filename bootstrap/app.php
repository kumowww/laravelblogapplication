<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withStructure(
        resources: base_path('resources'),
        database: base_path('database'),
    )
    ->withRouting(
        web: base_path('routes/web.php'),
        api: base_path('routes/api.php'),
        commands: base_path('routes/console.php'),
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'locale.validation' => \App\Http\Middleware\LocaleValidation::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
    })
    ->create();