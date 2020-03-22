<?php

namespace Modules\Core\Validator\Contracts;

interface IValidate
{
    public function setRules(array $rules): void;

    public function validate(array $input): bool;
}