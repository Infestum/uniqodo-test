<?php

use \App\Http\Controllers\Promocode\PromocodeController as PromocodeController;
use \App\Http\Middlewares\Auth;

use \Modules\Core\Http\{
    Router,
    Route
};

Router::register(
    'promocode-get',
    '/promocodes/' ,
    'GET',
    new Route(PromocodeController::class, 'get') ,
    new Auth()
);