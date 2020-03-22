<?php

namespace Modules\Core\Resource;

use Modules\Core\Contracts\IResource;

abstract class JSONResource implements IResource {

    public function convert()
    {
        // TODO: Implement convert() method.
    }

    abstract function toArray();
}
