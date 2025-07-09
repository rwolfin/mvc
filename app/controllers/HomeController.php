<?php
namespace app\controllers;

class HomeController {
    public function index() {
        $data = [
            'title' => 'Главная страница',
            'content' => 'Добро пожаловать на наш сайт-визитку!'
        ];
        
        require APP_ROOT . '/app/views/pages/home.php';
    }
}