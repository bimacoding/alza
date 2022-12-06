<?php

ob_start();
session_start();

use Alza\Kernel\Application;

$app = new Application;

define('Alza_VERSION', Application::VERSION);
define('APP_ENV', strtolower(config('app.env')));

return $app;
