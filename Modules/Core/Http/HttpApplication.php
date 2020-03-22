<?php

namespace Modules\Core\Http;

use Modules\Core\Abstractions\Application;
use Modules\Core\Contracts\IApplication;
use Modules\Core\Contracts\IExceptionHandler;
use Modules\Core\Contracts\IInput;
use Modules\Core\Contracts\IOutput;
use Modules\Core\Http\Contracts\IRoute;
use Modules\Core\Http\Contracts\IRouter;

class HttpApplication extends Application implements IApplication
{
    protected IRouter $router;
    protected ?IExceptionHandler $handler;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function setExceptionHandler(IExceptionHandler $handler)
    {
        $this->handler = $handler;
    }

    public function serve(IInput $input): IOutput
    {
        $path = $this->getPath();
        $route = $this->router->match($path);

        if (!$route) {
            throw new \Exception('Route not found');
        }

        return $this->execute($route, $input, $path);
    }

    protected function execute(IRoute $route, IInput $input, string $path)
    {
        try {
            $this->router->executeMiddleware($path);
            $callable = $route->getCallable();

            return $callable($input);
        } catch (\Exception $exception) {
            if ($this->handler) {
                $this->handler->handle($exception);
            } else {
                throw $exception;
            }
        }
    }

    protected function getPath(): string
    {
    }
}