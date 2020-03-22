<?php

namespace Modules\Core\Contracts;

interface IDBInstance
{
    public function connect(array $credentials);
}