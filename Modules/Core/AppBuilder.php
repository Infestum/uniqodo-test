<?php

namespace Modules\Core;

use Modules\Core\Contracts\IAppBuilder;
use Modules\Core\Contracts\IApplication;
use Modules\Core\Contracts\IContext;
use Modules\Core\Contracts\IExceptionHandler;

class AppBuilder implements IAppBuilder
{

    protected IContext $context;
    protected ApplicationFactory $factory;

    public function __construct(IContext $context)
    {
        $this->context = $context;
        $this->factory = new ApplicationFactory();
    }

    public function build(): IApplication
    {
        $app = $this->factory->produce($this->context);
        $app->setExceptionHandler($this->getExceptionHandler());

        return $app;
    }

    protected function getExceptionHandler(): IExceptionHandler
    {
        // logic to retrieve handleer
    }

}
