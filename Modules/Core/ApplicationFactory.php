<?php

namespace Modules\Core;

use Modules\Core\Contracts\IApplication;
use Modules\Core\Contracts\IContext;

class ApplicationFactory
{
    public const  MAP = [
        'http' => HttpApplication::class,
    ];

    /**
     * @param IContext $context
     * @return IApplication
     * @throws \Exception
     */
    public function produce(IContext $context): IApplication
    {
        $type = $context->getType();
        $class = static::MAP[$type] ?? null;

        if (!$class) {
            throw new \Exception("Application type of {$type} cannot be found");
        }

        return new $class();
    }
}