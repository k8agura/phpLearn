<!DOCTYPE html>
<html lang="<?= htmlspecialchars(current_locale(), ENT_QUOTES, 'UTF-8') ?>">
<head>
    <!-- Базовые метаданные документа -->
    <!-- titleKey приходит из контроллера и превращается в реальный текст через переводчик -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(__($titleKey), ENT_QUOTES, 'UTF-8') ?></title>
    <!-- Общие стили подключаются один раз для всех страниц -->
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <!-- page-shell ограничивает ширину контента и задает общий внешний контейнер -->
    <div class="page-shell">
        <?php
        // Общая шапка вынесена в partial, чтобы не дублировать один и тот же HTML на всех страницах.
        require __DIR__ . '/topbar.php';
        ?>
