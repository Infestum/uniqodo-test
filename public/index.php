<?php

use \Modules\Core\Context;
use \Modules\Core\AppBuilder;
use \Modules\Core\Http\Input\Request;

require '../vendor/autoload.php';
require '../bootstrap/bootstrap.php';

$appBuilder = new AppBuilder($context = new Context('http'));
$app = $appBuilder->build();

$response = $app->serve(
    $request = Request::capture(),
);

$response->send();

exit;