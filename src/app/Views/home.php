<?php
use App\Core\View;

// Общая HTML-обертка страницы и верхняя навигация вынесены в partials.
View::partial('page-start', ['titleKey' => $titleKey]);
?>
        <!-- Главный hero-блок главной страницы.
             Он не получает данных из базы, а использует только переводы из lang/*.php -->
        <section class="hero">
            <div>
                <!-- titleKey приходит из LibraryController::index() -->
                <span class="eyebrow"><?= htmlspecialchars(__('home.eyebrow'), ENT_QUOTES, 'UTF-8') ?></span>
                <h1><?= htmlspecialchars(__($titleKey), ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="hero-copy">
                    <?= htmlspecialchars(__('home.description'), ENT_QUOTES, 'UTF-8') ?>
                </p>
            </div>

            <div class="hero-grid">
                <!-- Правая часть hero: четыре учебные карточки про структуру проекта -->
                <article class="card">
                    <h2><?= htmlspecialchars(__('home.cards.model.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('home.cards.model.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="card">
                    <h2><?= htmlspecialchars(__('home.cards.controller.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('home.cards.controller.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="card">
                    <h2><?= htmlspecialchars(__('home.cards.view.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('home.cards.view.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="card">
                    <h2><?= htmlspecialchars(__('home.cards.practice.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('home.cards.practice.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            </div>
        </section>

        <?php
        // Отдельный showcase-блок для внешнего Java-проекта.
        // Он превращает другой репозиторий в понятную секцию на лендинге.
        View::partial('java-showcase');
        ?>
<?php View::partial('page-end'); ?>
