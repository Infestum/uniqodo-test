<?php

namespace Modules\Core\Http\Contracts;

use Modules\Core\Contracts\IInput;

interface IMiddleware
{
    public function exec(IInput $input);
}
