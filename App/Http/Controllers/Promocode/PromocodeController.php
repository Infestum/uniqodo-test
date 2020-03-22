<?php

namespace App\Http\Controllers\Promocode;

use App\Http\Requests\PromocodeGetRequestValidator;
use App\Models\Promocode\Promocode;
use App\Resources\PromocodeResource;
use App\Services\UsageController;
use Modules\Core\Contracts\IInput;
use Modules\Core\Contracts\IOutput;

class PromocodeController extends \Modules\Core\Http\Abstractions\Controller
{

    public function get(IInput $input): IOutput
    {
        // Validation
        $validator = new PromocodeGetRequestValidator($input, $model = new Promocode());
        $validator->execute();

        $input = $validator->validated();
        $item = $model->getById($input['id']);

        // Increase usage number
        $usageController = new UsageController();
        $usageController->increment($item);

        return $this->asResponse((new PromocodeResource($item))->toArray());
    }
}
