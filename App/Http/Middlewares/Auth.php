<?php

namespace App\Http\Middlewares;

use Modules\Core\Contracts\IInput;
use Modules\Core\Http\Contracts\IMiddleware;

class Auth implements IMiddleware {

    public function exec(IInput $input)
    {
        // Check api key here
    }
}