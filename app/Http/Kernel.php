<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\Authenticate; // Import the Authenticate middleware
use App\Http\Middleware\AdminMiddleware; // Import the Admin middleware
use App\Http\Middleware\UserMiddleware; // Import the User middleware

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Global middleware
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'user' => Authenticate::class,
        'admin' => AdminMiddleware::class,

    ];
}
