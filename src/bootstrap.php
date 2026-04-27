<?php

declare(strict_types=1);

use App\Core\Translator;
use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../vendor/autoload.php';

const APP_FALLBACK_LOCALE = 'en';
const APP_DEFAULT_LOCALE = 'ru';

$capsule = new Capsule();

// Eloquent читает настройки подключения из docker-compose.yml -> environment.
// Так данные из Docker попадают в ORM-конфиг PHP-приложения.
$capsule->addConnection([
    'driver' => $_ENV['DB_CONNECTION'] ?? getenv('DB_CONNECTION') ?: 'pgsql',
    'host' => $_ENV['DB_HOST'] ?? getenv('DB_HOST') ?: 'db',
    'port' => (int) ($_ENV['DB_PORT'] ?? getenv('DB_PORT') ?: 5432),
    'database' => $_ENV['DB_DATABASE'] ?? getenv('DB_DATABASE') ?: 'php_learning',
    'username' => $_ENV['DB_USERNAME'] ?? getenv('DB_USERNAME') ?: 'postgres',
    'password' => $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD') ?: 'postgres',
    'charset' => 'utf8',
    'prefix' => '',
    'schema' => 'public',
]);

// Делаем ORM глобально доступной для моделей App\Models\Book и других моделей.
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Выбираем язык либо из URL (?lang=ru), либо из cookie, либо берем язык по умолчанию.
$supportedLocales = ['ru', 'en'];
$requestedLocale = $_GET['lang'] ?? $_COOKIE['lang'] ?? APP_DEFAULT_LOCALE;
$locale = in_array($requestedLocale, $supportedLocales, true) ? $requestedLocale : APP_DEFAULT_LOCALE;

// Если пользователь явно переключил язык, запоминаем выбор в cookie.
if (isset($_GET['lang']) && $_GET['lang'] !== ($_COOKIE['lang'] ?? null)) {
    setcookie('lang', $locale, [
        'expires' => time() + 60 * 60 * 24 * 30,
        'path' => '/',
        'httponly' => false,
        'samesite' => 'Lax',
    ]);
}

$translator = new Translator($locale, APP_FALLBACK_LOCALE, __DIR__ . '/lang');

// Короткий хелпер для views:
// __('books.title') -> строка из src/lang/ru.php или src/lang/en.php
/**
 * Возвращает переведенную строку по ключу.
 */
function __($key): string
{
    global $translator;

    return $translator->translate((string) $key);
}

// Возвращает текущую активную локаль, чтобы шаблон мог выставить lang="ru" или lang="en".
/**
 * Возвращает код текущего языка интерфейса.
 */
function current_locale(): string
{
    global $translator;

    return $translator->getLocale();
}

// Строит URL с сохранением выбранного языка.
// Например /books + ru -> /books?lang=ru
/**
 * Собирает URL для страницы с сохранением или сменой локали.
 */
function localized_url(?string $path = null, ?string $locale = null): string
{
    $uri = $path ?? ($_SERVER['REQUEST_URI'] ?? '/');
    $targetLocale = $locale ?? current_locale();
    $parts = parse_url($uri);
    $basePath = $parts['path'] ?? '/';

    $query = [];

    if (isset($parts['query'])) {
        parse_str($parts['query'], $query);
    }

    $query['lang'] = $targetLocale;
    $queryString = http_build_query($query);

    return $queryString === '' ? $basePath : $basePath . '?' . $queryString;
}
