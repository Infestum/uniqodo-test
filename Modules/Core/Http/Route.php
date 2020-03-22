<?php

namespace Modules\Core\Http;

use Modules\Core\Http\Contracts\IRoute;

class Route implements  IRoute {

    public function __construct(string $controllerClass, string $method)
    {
    }

    public function getCallable(): callable
    {
        // TODO: Implement getCallable() method.
    }
}
