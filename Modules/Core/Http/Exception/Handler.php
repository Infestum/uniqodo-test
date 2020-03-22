<?php

namespace Modules\Core\Http\Exception;

use Modules\Core\Contracts\IExceptionHandler;

class Handler implements IExceptionHandler
{
    public function handle(\Exception $exception): void
    {
        // TODO: Implement handle() method.
    }
}