<?php

namespace Modules\Core\Http\Contracts;

use Modules\Core\Contracts\IInput;

interface IRoute
{
    public function getCallable(): callable;
}
