<?php

declare(strict_types=1);

// Общий bootstrap:
// 1. подключает Composer autoload
// 2. настраивает ORM Eloquent
// 3. поднимает систему переводов
require_once __DIR__ . '/../bootstrap.php';

use App\Controllers\LibraryController;
use App\Core\Router;

// Router хранит соответствие URL -> метод контроллера.
$router = new Router();

// Один контроллер обслуживает все страницы библиотеки.
$controller = new LibraryController();

// Здесь мы связываем маршруты с методами контроллера.
// Например /books -> LibraryController::books()
$router->get('/', [$controller, 'index']);
$router->get('/books', [$controller, 'books']);
$router->get('/stats', [$controller, 'stats']);
$router->get('/available', [$controller, 'available']);
$router->get('/popular', [$controller, 'popular']);

// Берем текущий URL из запроса и передаем его в роутер.
$router->dispatch($_SERVER['REQUEST_URI'] ?? '/');
