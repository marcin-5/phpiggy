<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function addRoute(string $method, string $path, array $controller): void
    {
        $path = $this->normalizePath($path);
        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller,
        ];
    }

    private function normalizePath(string $path): string
    {
        $path = "/{$path}/";
        return preg_replace('/\/{2,}/', '/', $path);
    }
}
