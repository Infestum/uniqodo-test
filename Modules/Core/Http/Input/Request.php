<?php

namespace Modules\Core\Http\Input;

use Modules\Core\Contracts\IInput;

class Request implements IInput
{
    protected string $type;
    protected ?array $payload;

    static public function capture(): IInput
    {
        // Capture logic to go here

        return new static($type, $payload);
    }

    public function __construct(string $type, ?array $payload)
    {
        $this->type = $type;
        $this->payload = $payload;
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function getType(): string
    {
        // TODO: Implement getType() method.
    }
}