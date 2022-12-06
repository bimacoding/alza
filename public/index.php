<?php
/**
 * alza - a simple framework for PHP Developers
 *
 * @author   izni burak demirtaş (@bimacoding) <bimacoding@gmail.com>
 * @web      <http://burakdemirtas.org>
 * @url      <https://github.com/bimacoding/alza>
 * @license  The MIT License (MIT) - <http://opensource.org/licenses/MIT>
 */

// Autoload Dependencies
require_once __DIR__ . '/../vendor/autoload.php';

/** @var \Alza\Kernel\Application $app */
$app = require_once __DIR__ . '/../app/bootstrap.php';

$app->start(APP_ENV);
