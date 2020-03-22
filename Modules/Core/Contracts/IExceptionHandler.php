<?php

namespace Modules\Core\Contracts;

interface IExceptionHandler
{
    public function handle(\Exception $exception): void;
}