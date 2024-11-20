<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class AuthController
{
    public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validator
    ) {
    }

    public function registerView(): void
    {
        echo $this->view->render("/register.php");
    }

    public function register(): void
    {
        dd($_POST);
    }
}
