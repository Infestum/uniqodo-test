<?php

namespace App\Http\Requests;

use App\Http\Contracts\IRequestValidator;
use App\Models\Promocode\Promocode;
use App\Validation\Rules\Exists;
use App\Validation\Rules\IsActive;
use App\Validation\Rules\UsageAllowed;
use App\Validation\Rules\WithinDate;
use Modules\Core\Contracts\IInput;
use Modules\Core\Validator\Contracts\IValidate;
use Modules\Core\Validator\Validator;

class PromocodeGetRequestValidator implements IRequestValidator {

    protected IValidate $driver;
    protected IInput $input;
    protected array $rulesMap = [
        'exists' => Exists::class,
        'is_actve' => IsActive::class,
        'usage_allowed' => UsageAllowed::class,
        'within_date' => WithinDate::class,
    ];
    protected Promocode $model;

    public function __construct(IInput $input, Promocode $model)
    {
        $this->driver = new Validator();
        $this->input = $input;
        $this->model = $model;
    }

    public function validated(): array
    {
        // TODO: Implement validated() method.
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }
}