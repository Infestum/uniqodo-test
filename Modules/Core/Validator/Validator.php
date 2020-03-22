<?php

namespace Modules\Core\Validator;

use Modules\Core\Validator\Contracts\IValidate;

class Validator implements IValidate {

    protected array $rules = [];

    public function setRules(array $rules): void
    {
        $this->rules = $rules;
    }

    public function validate(array $input): bool
    {
        // TODO: Implement validate() method.
    }
}