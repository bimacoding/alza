<?php

return [

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     */
    'middleware' => [
        // \Alza\Http\Middleware\CorsMiddleware::class,
        \Alza\Http\Middleware\TrimStrings::class,
        \Alza\Http\Middleware\ConvertEmptyStringsToNull::class,
    ],

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     */
    'routeMiddleware' => [
        'auth' => \Alza\Http\Middleware\AuthMiddleware::class,
        'auth.jwt' => \Alza\Http\Middleware\JwtMiddleware::class,
    ],

    /**
     * The application's route middleware groups.
     */
    'middlewareGroup' => [

        'web' => [
            // \Alza\Http\Middleware\CsrfMiddleware::class,
        ],

        'api' => [
            'auth.jwt',
        ],

    ],

];
