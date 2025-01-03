<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RedirectBasedOnRole;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DashboardMiddleware;

return function (Application $app) {
    $app->middleware([
        // Global middleware
    ]);
};