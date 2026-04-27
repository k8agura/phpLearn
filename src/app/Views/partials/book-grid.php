<?php
/**
 * Универсальный partial для вывода карточек книг.
 *
 * Ожидает:
 * - $books: массив объектов Book
 * - $emptyKey: ключ перевода для пустого состояния
 * - $availabilityMode: "mixed" или "available_only"
 */
?>
<?php if ($books === []): ?>
    <!-- Если массив книг пустой, показываем текст пустого состояния -->
    <div class="empty-state"><?= htmlspecialchars(__($emptyKey), ENT_QUOTES, 'UTF-8') ?></div>
<?php else: ?>
    <!-- Сетка карточек сама адаптируется по ширине через CSS grid -->
    <div class="books-grid">
        <?php foreach ($books as $book): ?>
            <!-- Одна карточка показывает одну ORM-модель Book -->
            <article class="book-card">
                <div>
                    <!-- Основной контент карточки: название, автор и год издания -->
                    <h2 class="book-title"><?= htmlspecialchars($book->getTitle(), ENT_QUOTES, 'UTF-8') ?></h2>
                    <p class="book-meta">
                        <?= htmlspecialchars($book->getAuthor(), ENT_QUOTES, 'UTF-8') ?><br>
                        <?= htmlspecialchars(__('book.published'), ENT_QUOTES, 'UTF-8') ?> <?= $book->getYear() ?>
                    </p>
                </div>

                <div class="book-tags">
                    <!-- Нижняя строка карточки: популярность и текущий статус книги -->
                    <!-- borrow_count приходит из базы и отображается как метка популярности -->
                    <span class="tag tag-warm"><?= htmlspecialchars(__('book.borrows'), ENT_QUOTES, 'UTF-8') ?>: <?= $book->getBorrowCount() ?></span>
                    <?php if ($availabilityMode === 'available_only'): ?>
                        <!-- На странице available статус всегда одинаковый -->
                        <span class="tag tag-success"><?= htmlspecialchars(__('book.available_now'), ENT_QUOTES, 'UTF-8') ?></span>
                    <?php else: ?>
                        <!-- На остальных страницах статус зависит от is_available -->
                        <span class="tag <?= $book->isAvailable() ? 'tag-success' : '' ?>">
                            <?= htmlspecialchars($book->isAvailable() ? __('book.available_now') : __('book.currently_borrowed'), ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
