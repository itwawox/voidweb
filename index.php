<?php

declare(strict_types=1);

$title = 'voidweb';
$now = new DateTimeImmutable('now');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
    <p>PHP отвечает. Тестовая страница.</p>
    <p>Время сервера: <?= htmlspecialchars($now->format('Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8') ?></p>
    <p>Версия PHP: <?= htmlspecialchars(PHP_VERSION, ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
