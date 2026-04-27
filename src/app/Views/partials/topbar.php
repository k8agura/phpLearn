<?php
// Topbar использует:
// 1. переводы из файлов локалей
// 2. localized_url() для сохранения выбранного языка в ссылках
// 3. current_locale() для подсветки активной локали
?>
<header class="topbar">
    <!-- Логотип проекта всегда ведет на главную страницу с сохранением текущего языка -->
    <a class="brand" href="<?= htmlspecialchars(localized_url('/'), ENT_QUOTES, 'UTF-8') ?>">
        <span class="brand-badge">MVC</span>
        <span><?= htmlspecialchars(__('meta.app_name'), ENT_QUOTES, 'UTF-8') ?></span>
    </a>

    <div class="topbar-actions">
        <!-- Основное меню приложения -->
        <nav class="nav">
            <a href="<?= htmlspecialchars(localized_url('/'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('nav.home'), ENT_QUOTES, 'UTF-8') ?></a>
            <a href="<?= htmlspecialchars(localized_url('/books'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('nav.books'), ENT_QUOTES, 'UTF-8') ?></a>
            <a href="<?= htmlspecialchars(localized_url('/available'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('nav.available'), ENT_QUOTES, 'UTF-8') ?></a>
            <a href="<?= htmlspecialchars(localized_url('/popular'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('nav.popular'), ENT_QUOTES, 'UTF-8') ?></a>
            <a href="<?= htmlspecialchars(localized_url('/stats'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('nav.stats'), ENT_QUOTES, 'UTF-8') ?></a>
        </nav>

        <!-- Переключатель языка:
             active-класс нужен только для визуальной подсветки текущей локали -->
        <div class="locale-switch">
            <span><?= htmlspecialchars(__('locale.label'), ENT_QUOTES, 'UTF-8') ?>:</span>
            <a class="<?= current_locale() === 'ru' ? 'is-active' : '' ?>" href="<?= htmlspecialchars(localized_url(null, 'ru'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('locale.ru'), ENT_QUOTES, 'UTF-8') ?></a>
            <a class="<?= current_locale() === 'en' ? 'is-active' : '' ?>" href="<?= htmlspecialchars(localized_url(null, 'en'), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(__('locale.en'), ENT_QUOTES, 'UTF-8') ?></a>
        </div>
    </div>
</header>
