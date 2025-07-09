<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $data['title'] ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; line-height: 1.6; }
       nav { background: #2E8619;  padding: 1rem;}
        nav a { color: white; text-decoration: none; margin-right: 1rem; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 1200px; margin: 0 auto; padding: 2rem; }
        .active { font-weight: bold; }
        footer { background: #333; color: white; text-align: center; padding: 1rem; margin-top: 2rem; }
    </style>
</head>
<body>
    <nav>
        <a href="/" class="<?= ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') ? 'active' : '' ?>">Главная</a>
        <a href="/app/views/pages/about.php" class="<?= strpos($_SERVER['REQUEST_URI'], 'about.php') !== false ? 'active' : '' ?>">О нас</a>
        <a href="/app/views/pages/contact.php" class="<?= strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false ? 'active' : '' ?>">Контакты</a>
    </nav>
    <div class="container">