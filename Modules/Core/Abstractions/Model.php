<?php

namespace Modules\Core\Abstractions;

use Modules\Core\Contracts\IDBInstance;
use Modules\Core\Contracts\IModel;

abstract class Model implements IModel
{
    protected IDBInstance $db;
}
