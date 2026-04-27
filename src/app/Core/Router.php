<?php

declare(strict_types=1);

namespace App\Core;

final class Router
{
    /**
     * Таблица маршрутов:
     * ключ = путь URL
     * значение = метод контроллера, который надо вызвать
     *
     * @var array<string, callable>
     */
    private array $routes = [];

    /**
     * Регистрирует GET-маршрут и функцию-обработчик для этого маршрута.
     */
    public function get(string $path, callable $handler): void
    {
        // Регистрируем, какой обработчик отвечает за конкретный GET-маршрут.
        $this->routes[$path] = $handler;
    }

    /**
     * Находит обработчик по URI и вызывает связанный метод контроллера.
     */
    public function dispatch(string $uri): void
    {
        // Из полного URI берем только путь без query-параметров.
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';

        if (!array_key_exists($path, $this->routes)) {
            http_response_code(404);
            echo 'Page not found';
            return;
        }

        // Вызываем нужный метод контроллера, который был привязан в public/index.php.
        call_user_func($this->routes[$path]);
    }
}
