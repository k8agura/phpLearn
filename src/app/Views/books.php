<?php
use App\Core\View;

// Подключаем общий старт страницы: HTML, <head>, стили и верхнюю навигацию.
View::partial('page-start', ['titleKey' => $titleKey]);
?>
        <!-- На эту страницу контроллер передает:
             1. $titleKey
             2. $books = массив объектов App\Models\Book -->
        <section class="panel">
            <!-- Заголовочная зона каталога -->
            <?php
            View::partial('panel-header', [
                'eyebrowKey' => 'books.eyebrow',
                'titleKey' => $titleKey,
                'descriptionKey' => 'books.description',
            ]);
            ?>

            <?php
            // Контентная зона каталога:
            // здесь выводится либо пустое состояние, либо сетка карточек книг.
            View::partial('book-grid', [
                'books' => $books,
                'emptyKey' => 'books.empty',
                'availabilityMode' => 'mixed',
            ]);
            ?>
        </section>
<?php View::partial('page-end'); ?>
