<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\View;
use App\Models\Library;

final class LibraryController
{
    // Контроллер не работает с SQL напрямую.
    // Все данные он запрашивает у модели/сервиса Library.
    private Library $library;

    public function __construct()
    {
        $this->library = new Library();
    }

    /**
     * Открывает главную страницу проекта.
     */
    public function index(): void
    {
        // Главная страница:
        // в шаблон home.php уходит только ключ заголовка.
        View::render('home', [
            'titleKey' => 'home.title',
        ]);
    }

    /**
     * Показывает все книги из базы данных.
     */
    public function books(): void
    {
        // /books -> берем все книги из модели Library
        // и передаем их во view books.php как переменную $books.
        View::render('books', [
            'titleKey' => 'books.title',
            'books' => $this->library->getAllBooks(),
        ]);
    }

    /**
     * Показывает агрегированную статистику библиотеки.
     */
    public function stats(): void
    {
        // /stats -> получаем агрегированную статистику
        // и передаем ее во view stats.php как массив $stats.
        View::render('stats', [
            'titleKey' => 'stats.title',
            'stats' => $this->library->getStats(),
        ]);
    }

    /**
     * Показывает только доступные книги.
     */
    public function available(): void
    {
        // /available -> контроллер вызывает только книги со статусом available
        // и отправляет их в шаблон available.php как $books.
        View::render('available', [
            'titleKey' => 'available.title',
            'books' => $this->library->getAvailableBooks(),
        ]);
    }

    /**
     * Показывает книги, отсортированные по популярности.
     */
    public function popular(): void
    {
        // /popular -> контроллер связан с методом Library::getPopularBooks()
        // Здесь данные уже отсортированы моделью по borrow_count.
        View::render('popular', [
            'titleKey' => 'popular.title',
            'books' => $this->library->getPopularBooks(),
        ]);
    }
}
