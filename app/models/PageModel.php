<?php
namespace app\models;

class PageModel {
    public function getPageData($page) {
        $pages = [
            'about' => [
                'title' => 'О нас',
                'content' => 'Мы - лучшая компания в мире! Основана в 2010 году, более 1000 довольных клиентов!'
            ],
            'contact' => [
                'title' => 'Контакты',
                'content' => 'Email: contact@example.com<br>Телефон: +7 (999) 123-45-67'
            ]
        ];
        
        return $pages[$page] ?? [
            'title' => 'Страница не найдена',
            'content' => 'Ошибка 404'
        ];
    }
}