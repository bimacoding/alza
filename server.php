<?php
/**
 * alza - a simple framework for PHP Developers
 *
 * @author   izni burak demirtaş (@bimacoding) <bimacoding@gmail.com>
 * @url      <https://github.com/bimacoding/alza>
 * @license  The MIT License (MIT) - <http://opensource.org/licenses/MIT>
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Adapted from server.php file of Laravel Framework
// @see https://github.com/laravel/laravel/blob/master/server.php
//
// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Alza
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

require_once __DIR__ . '/public/index.php';
