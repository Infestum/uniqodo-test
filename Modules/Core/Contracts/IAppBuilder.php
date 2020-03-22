<?php

namespace Modules\Core\Contracts;

use Modules\Core\Abstractions\Application;

interface IAppBuilder
{
    public function build(): Application;
}