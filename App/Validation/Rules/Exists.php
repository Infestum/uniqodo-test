<?php

namespace App\Validation\Rules;

use App\Validation\Contracts\IRule;
use Modules\Core\Contracts\IInput;

class Exists implements IRule {

    public function check($value, IInput $input): bool
    {
        // TODO: Implement check() method.
    }

}