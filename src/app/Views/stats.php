<?php
use App\Core\View;

// Подключаем общий старт страницы: HTML, <head>, стили и верхнюю навигацию.
View::partial('page-start', ['titleKey' => $titleKey]);
?>
        <!-- Сюда контроллер stats() передает массив $stats:
             total_books, available_books, borrowed_books, total_borrows -->
        <section class="panel">
            <!-- Заголовок аналитической страницы -->
            <?php
            View::partial('panel-header', [
                'eyebrowKey' => 'stats.eyebrow',
                'titleKey' => $titleKey,
                'descriptionKey' => 'stats.description',
            ]);
            ?>

            <!-- Сетка статистических карточек -->
            <div class="stats-grid">
                <!-- Каждая карточка берет одно число из массива $stats -->
                <article class="stat-card">
                    <strong><?= $stats['total_books'] ?></strong>
                    <h2><?= htmlspecialchars(__('stats.cards.total_books.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('stats.cards.total_books.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="stat-card">
                    <strong><?= $stats['available_books'] ?></strong>
                    <h2><?= htmlspecialchars(__('stats.cards.available_books.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('stats.cards.available_books.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="stat-card">
                    <strong><?= $stats['borrowed_books'] ?></strong>
                    <h2><?= htmlspecialchars(__('stats.cards.borrowed_books.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('stats.cards.borrowed_books.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
                <article class="stat-card">
                    <strong><?= $stats['total_borrows'] ?></strong>
                    <h2><?= htmlspecialchars(__('stats.cards.total_borrows.title'), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars(__('stats.cards.total_borrows.text'), ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            </div>
        </section>
<?php View::partial('page-end'); ?>
