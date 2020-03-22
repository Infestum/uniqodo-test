<?php

namespace App\Models\Promocode;

use Modules\Core\Abstractions\Model;

class Promocode extends Model
{
    protected string $table = 'promocodes';

    public function getById($id): self
    {
    }
}