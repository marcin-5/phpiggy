<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function addRoute(string $path): void
    {
        $this->routes[] = [
            'path' => $path,
        ];
    }
}
