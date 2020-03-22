<?php

namespace App\Http\Contracts;

interface IRequestValidator
{
    public function validated(): array;

    public function execute();
}