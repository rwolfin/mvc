<?php
define('APP_ROOT', dirname(__DIR__));

require APP_ROOT . '/vendor/autoload.php';

use app\core\Router;

$router = new Router();
$router->dispatch();