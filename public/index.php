<?php
define('APP_ROOT', dirname(__DIR__));

// Автозагрузка классов
spl_autoload_register(function ($class) {
    $file = APP_ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Запуск роутера
require APP_ROOT . '/app/core/Router.php';
$router = new app\core\Router();
$router->dispatch();