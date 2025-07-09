<?php require APP_ROOT . '/app/views/templates/header.php'; ?>

<h1><?= $data['title'] ?></h1>
<div><?= $data['content'] ?></div>
<h2>Наш офис</h2>
<p>Москва, ул. Тверская, д. 10</p>
<div id="map" style="height: 300px; background: #f0f0f0; margin: 1rem 0; display: flex; align-items: center; justify-content: center;">
    [ Здесь будет карта ]
</div>

<?php require APP_ROOT . '/app/views/templates/footer.php'; ?>