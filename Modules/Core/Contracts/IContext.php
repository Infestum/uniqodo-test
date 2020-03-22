<?php

namespace Modules\Core\Contracts;

interface IContext
{
    public function getType(): string;
}