<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    public function __construct(private string $basePath)
    {
    }

    public function render(string $template, array $data = []): string
    {
        extract($data, EXTR_SKIP);
        ob_start();
        include $this->resolve($template);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function resolve(string $path): string
    {
        return "{$this->basePath}/{$path}";
    }
}
