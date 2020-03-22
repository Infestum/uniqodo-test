<?php

namespace Modules\Core\Contracts;

use Modules\Core\Abstractions\Application;

interface IDBInstance
{
    public function connect(array $credentials);
    public function select(array $fields);
    public function from(string $table);
    public function where(array $field, string $condition, $value);
    public function orWhere(array $field, string $condition, $value);
    public function get();
    public function first();
    public function exists();
}