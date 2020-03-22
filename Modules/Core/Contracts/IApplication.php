<?php

namespace Modules\Core\Contracts;

interface IApplication
{
    public function setExceptionHandler(IExceptionHandler $handler);
    public function serve(IInput $input): IOutput;
}