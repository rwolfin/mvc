<?php
//define('APP_ROOT', dirname(__DIR__));
require '../app/views/templates/header.php'; ?>

<h1><?= $data['title'] ?></h1>
<p><?= $data['content'] ?></p>
<p>Этот сайт создан с использованием MVC-архитектуры.</p>

<?php require '../app/views/templates/footer.php'; ?>