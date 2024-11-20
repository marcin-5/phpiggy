<?php

declare(strict_types=1);

namespace App\Config;

use App\Controllers\{AboutController, AuthController, HomeController};
use Framework\App;

function registerRoutes(App $app): App
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register', [AuthController::class, 'register']);

    return $app;
}
