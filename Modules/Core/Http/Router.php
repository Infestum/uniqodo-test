<?php

namespace Modules\Core\Http;

use Modules\Core\Http\Contracts\IMiddleware;
use Modules\Core\Http\Contracts\IRoute;
use Modules\Core\Http\Contracts\IRouter;

class Router implements IRouter
{
    protected static array $routes = [];

    public static function register(
        string $name,
        string $path,
        string $type,
        IRoute $route,
        ?IMiddleware $middleware)
    {
        static::$routes[$name] = [
            'type' => $type,
            'path' => $path,
            'middleware' => $middleware,
            'item' => $route,
        ];
    }

    public function match(string $path): ?IRoute
    {
        foreach (static::$routes as $route) {
            if ($route['path'] === $path) {
                return $route['item'];
            }
        }

        return null;
    }

    public function executeMiddleware(string $path) {

    }
}
