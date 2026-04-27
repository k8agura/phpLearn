<?php

declare(strict_types=1);

namespace App\Core;

final class View
{
    /**
     * Рендерит основной шаблон страницы.
     *
     * $template = имя PHP-шаблона из папки Views
     * $data = массив данных, которые контроллер передает во view
     *
     * Пример:
     * View::render('books', ['books' => [...], 'titleKey' => 'books.title'])
     *
     * @param array<string, mixed> $data
     */
    public static function render(string $template, array $data = []): void
    {
        // Превращаем ключи массива в обычные переменные шаблона:
        // ['books' => ...] -> $books
        // ['titleKey' => ...] -> $titleKey
        extract($data, EXTR_SKIP);

        // Подключаем конкретный PHP-шаблон страницы.
        require __DIR__ . '/../Views/' . $template . '.php';
    }

    /**
     * Подключает маленький повторно используемый partial-шаблон.
     *
     * @param array<string, mixed> $data
     */
    public static function partial(string $template, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        require __DIR__ . '/../Views/partials/' . $template . '.php';
    }
}
