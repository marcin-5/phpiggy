<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class AboutController
{
    public function __construct(private TemplateEngine $view)
    {
    }

    public function about(): void
    {
        echo $this->view->render("/about.php", [
            'title' => 'About page',
            'dangerousData' => '<script>alert("Dangerous data")</script>',
        ]);
    }
}
