<?php

namespace Modules\Core\Contracts;

interface IInput
{
    public function getData();
    public function getType(): string;
}