<?php
define('BASEDIR', __DIR__);

use T\Interfaces\Kernel;

// set errors handler
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();

// init container and register services
$servicesConfigFile = __DIR__ . '/config/services.php';
if (file_exists($servicesConfigFile)) {
    $box = new \T\Services\Box();
    $box->pack(include $servicesConfigFile);
} else throw new Exception('Services configuration file not found');

// launch app
$kernel = $box[Kernel::class];
$response = $kernel->handle(
    $request = T\Services\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);
