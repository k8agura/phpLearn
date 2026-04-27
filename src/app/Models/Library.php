<?php

declare(strict_types=1);

namespace App\Models;

final class Library
{
    /**
     * Возвращает все книги из таблицы books.
     * Эти данные идут в LibraryController::books() -> view books.php.
     *
     * @return Book[]
     */
    public function getAllBooks(): array
    {
        return Book::query()
            ->orderBy('id')
            ->get()
            ->all();
    }

    /**
     * Возвращает только доступные книги.
     * Эти данные идут в LibraryController::available() -> view available.php.
     *
     * @return Book[]
     */
    public function getAvailableBooks(): array
    {
        return Book::query()
            ->where('is_available', true)
            ->orderBy('id')
            ->get()
            ->all();
    }

    /**
     * Возвращает книги, отсортированные по популярности.
     * Эти данные идут в LibraryController::popular() -> view popular.php.
     *
     * @return Book[]
     */
    public function getPopularBooks(): array
    {
        return Book::query()
            ->orderBy('borrow_count', 'desc')
            ->get()
            ->all();
    }

    /**
     * Собирает краткую статистику для страницы /stats.
     * Контроллер получает этот массив и передает его во view как переменную $stats.
     *
     * @return array<string, int>
     */
    public function getStats(): array
    {
        return [
            'total_books' => Book::query()->count(),
            'available_books' => Book::query()->where('is_available', true)->count(),
            'borrowed_books' => Book::query()->where('is_available', false)->count(),
            'total_borrows' => (int) Book::query()->sum('borrow_count'),
        ];
    }
}
