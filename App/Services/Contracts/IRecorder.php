<?php

namespace App\Services\Contracts;

use Modules\Core\Contracts\IModel;

interface IRecorder {
    public function increment(IModel $model);
}
