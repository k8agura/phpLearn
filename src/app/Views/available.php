<?php
use App\Core\View;

// Подключаем общий старт страницы: HTML, <head>, стили и верхнюю навигацию.
View::partial('page-start', ['titleKey' => $titleKey]);
?>
        <!-- Сюда контроллер available() передает только доступные книги как $books. -->
        <section class="panel">
            <!-- Заголовок страницы с описанием фильтра -->
            <?php
            // Внутренний заголовок panel-секций теперь тоже общий.
            View::partial('panel-header', [
                'eyebrowKey' => 'available.eyebrow',
                'titleKey' => $titleKey,
                'descriptionKey' => 'available.description',
            ]);
            ?>

            <?php
            // В этой версии partial получает режим available_only,
            // поэтому каждая карточка выводит только "доступна сейчас".
            View::partial('book-grid', [
                'books' => $books,
                'emptyKey' => 'available.empty',
                'availabilityMode' => 'available_only',
            ]);
            ?>
        </section>
<?php View::partial('page-end'); ?>
