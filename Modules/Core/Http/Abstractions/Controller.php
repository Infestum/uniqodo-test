<?php

namespace Modules\Core\Http\Abstractions;

use Modules\Core\Contracts\IOutput;

abstract class Controller
{
    public function asResponse(): IOutput
    {
    }

    // some general logic and abstract methods to go here
}