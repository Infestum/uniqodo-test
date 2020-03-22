<?php

namespace Modules\Core\Http\Output;

use Modules\Core\Contracts\IOutput;

class Response implements IOutput
{
    protected $output;
    protected int $code;

    public function __construct($output, int $code = 200)
    {
        $this->output = $output;
        $this->code = $code;
    }

    public function send()
    {
        // TODO: Implement send() method.
    }
}
