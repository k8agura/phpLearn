<?php
use App\Core\View;

// Подключаем общий старт страницы: HTML, <head>, стили и верхнюю навигацию.
View::partial('page-start', ['titleKey' => $titleKey]);
?>
        <!-- Сюда контроллер popular() передает $books,
             уже отсортированные моделью Library по borrow_count -->
        <section class="panel">
            <!-- Заголовок страницы рейтинга -->
            <?php
            View::partial('panel-header', [
                'eyebrowKey' => 'popular.eyebrow',
                'titleKey' => $titleKey,
                'descriptionKey' => 'popular.description',
            ]);
            ?>

            <?php
            // Здесь используется обычный mixed-режим,
            // поэтому карточка показывает и доступные, и выданные книги.
            View::partial('book-grid', [
                'books' => $books,
                'emptyKey' => 'popular.empty',
                'availabilityMode' => 'mixed',
            ]);
            ?>
        </section>
<?php View::partial('page-end'); ?>
