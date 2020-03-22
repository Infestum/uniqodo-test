<?php

namespace Modules\Core\Contracts;

interface IAppBuilder
{
    public function build(): IApplication;
}