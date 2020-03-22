<?php

namespace Modules\Core;

class Context
{
    protected string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }
}