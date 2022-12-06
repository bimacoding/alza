<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
        * Alza Framework Service Providers...
        */
        Alza\Providers\Auth::class,
        Alza\Providers\Blade::class,
        // Alza\Providers\Cache::class,
        Alza\Providers\Database::class,
        Alza\Providers\Hash::class,
        Alza\Providers\Mail::class,
        // Alza\Providers\Pdox::class,
        // Alza\Providers\Translation::class,

        /*
        * Application Service Providers...
        */
        App\Providers\AppServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'Auth'        => Alza\Facades\Auth::class,
        // 'Cache'    => Alza\Facades\Cache::class,
        'Config'      => Alza\Facades\Config::class,
        'DB'          => Alza\Facades\DB::class,
        'Hash'        => Alza\Facades\Hash::class,
        'Jwt'         => Alza\Facades\Jwt::class,
        'Mail'        => Alza\Facades\Mail::class,
        // 'Pdox'     => Alza\Facades\Sql::class,

    ],

];
