<?php
namespace app\controllers;

use app\models\PageModel;

class PageController {
    public function about() {
        $model = new PageModel();
        $data = $model->getPageData('about');
        
        require APP_ROOT . '/app/views/pages/about.php';
    }
    
    public function contact() {
        $model = new PageModel();
        $data = $model->getPageData('contact');
        
        require APP_ROOT . '/app/views/pages/contact.php';
    }
}