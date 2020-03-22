<?php

namespace App\Validation\Contracts;

use Modules\Core\Contracts\IInput;

interface IRule {
    public function check($value, IInput $input): bool;
}