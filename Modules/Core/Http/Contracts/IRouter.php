<?php

namespace Modules\Core\Http\Contracts;

interface IRouter
{
    public static function register(
        string $name,
        string $path,
        string $type,
        IRoute $route,
        ?IMiddleware $middleware
    );

    public function match(string $path): ?IRoute;
    public function executeMiddleware(string $path);
}
