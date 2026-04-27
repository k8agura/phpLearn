# PHP Learning Project

Учебный проект на `PHP + Docker + PostgreSQL + Eloquent ORM + MVC`.

Проект сделан как тренировочная площадка, чтобы на простом примере понять:
- как Docker поднимает приложение и базу данных
- как `Router` отправляет запрос в контроллер
- как контроллер получает данные из модели
- как модель работает с PostgreSQL через ORM
- как view рендерит данные в HTML
- как устроены переводы `ru/en`

## Что используется

- `PHP 8.3`
- `PostgreSQL 16`
- `Docker Compose`
- `Eloquent ORM`
- простая MVC-структура без тяжелого фреймворка

## Как запустить с нуля

### 1. Что нужно установить

На компьютере должны быть установлены:

- `Docker Desktop`
- `Git` — по желанию, если хочешь клонировать проект

### 2. Перейти в папку проекта

```powershell
cd ...\php-learning
```

### 3. Поднять контейнеры

```powershell
docker compose up -d --build
```

Эта команда:
- собирает PHP-контейнер из `Dockerfile`
- скачивает образ `PostgreSQL`
- запускает приложение и базу
- создает таблицу `books` через init SQL

### 4. Установить PHP-зависимости

Если запускаешь проект впервые:

```powershell
docker compose exec app composer install
```

### 5. Открыть проект в браузере

```text
http://localhost:8000
```

### 6. Переключение языка

Русский:

```text
http://localhost:8000/?lang=ru
```

Английский:

```text
http://localhost:8000/?lang=en
```

## Полезные команды

Остановить контейнеры:

```powershell
docker compose down
```

Посмотреть контейнеры:

```powershell
docker compose ps
```

Проверить синтаксис PHP-файла:

```powershell
docker compose exec app php -l src/app/Controllers/LibraryController.php
```

Открыть PostgreSQL:

```powershell
docker compose exec db psql -U postgres -d php_learning
```

## Маршруты проекта

- `/` — главная страница
- `/books` — все книги
- `/available` — только доступные книги
- `/popular` — книги по популярности
- `/stats` — статистика библиотеки

## Карта проекта

```text
php-learning/
├─ docker/
│  └─ postgres/
│     └─ init/
│        └─ 01-init.sql
├─ src/
│  ├─ app/
│  │  ├─ Controllers/
│  │  ├─ Core/
│  │  ├─ Models/
│  │  └─ Views/
│  │     └─ partials/
│  ├─ lang/
│  ├─ public/
│  │  └─ assets/
│  └─ bootstrap.php
├─ composer.json
├─ docker-compose.yml
├─ Dockerfile
└─ README.md
```

## Что лежит в каждой папке

### `docker/`

Файлы для инфраструктуры Docker.

### `docker/postgres/init/`

SQL-скрипты, которые PostgreSQL выполняет при первой инициализации базы.

### `src/`

Весь PHP-код приложения.

### `src/bootstrap.php`

Общий старт приложения:
- подключает Composer autoload
- настраивает Eloquent ORM
- поднимает переводчик
- дает хелперы `__()`, `current_locale()`, `localized_url()`

### `src/public/`

Публичная часть приложения, которую отдает PHP-сервер.

### `src/public/index.php`

Главная точка входа:
- создает `Router`
- создает `LibraryController`
- связывает URL с методами контроллера

### `src/public/assets/`

CSS и другие фронтенд-ресурсы.

### `src/app/Core/`

Базовые служебные классы проекта.

### `src/app/Core/Router.php`

Мини-роутер. Получает URL и вызывает нужный метод контроллера.

### `src/app/Core/View.php`

Отвечает за рендер обычных view и маленьких partial-шаблонов.

### `src/app/Core/Translator.php`

Работает с файлами переводов и возвращает строки по ключам.

### `src/app/Controllers/`

Контроллеры MVC.

### `src/app/Controllers/LibraryController.php`

Контроллер страниц библиотеки:
- `index()`
- `books()`
- `available()`
- `popular()`
- `stats()`

### `src/app/Models/`

Модели и доступ к данным.

### `src/app/Models/Book.php`

ORM-модель одной книги. Связана с таблицей `books`.

### `src/app/Models/Library.php`

Прикладной слой над ORM:
- получает все книги
- фильтрует доступные
- сортирует популярные
- собирает статистику

### `src/app/Views/`

HTML-шаблоны страниц.

### `src/app/Views/partials/`

Переиспользуемые куски шаблонов:
- общая шапка
- начало и конец HTML-страницы
- общий заголовок panel-блоков
- сетка карточек книг

### `src/lang/`

Файлы переводов интерфейса.

## Как идет запрос внутри приложения

Поток такой:

1. Браузер открывает, например, `/books`
2. PHP-сервер передает запрос в `src/public/index.php`
3. `Router` находит маршрут `/books`
4. Вызывается `LibraryController::books()`
5. Контроллер просит модель `Library` вернуть книги
6. `Library` получает данные из `Book` через Eloquent ORM
7. Контроллер передает массив книг в view
8. View рендерит HTML и отправляет его в браузер

## База данных

Используется база:

- хост: `db` внутри Docker
- порт: `5432`
- база: `php_learning`
- пользователь: `postgres`
- пароль: `postgres`

Таблица `books` содержит:

- `id`
- `title`
- `author`
- `year`
- `borrow_count`
- `is_available`

## Для чего нужны partials

Partials добавлены, чтобы:
- не дублировать одну и ту же шапку на каждой странице
- не копировать одинаковую разметку карточек книг
- не повторять одинаковые panel-заголовки
- упростить поддержку шаблонов

## Следующие шаги для развития проекта

Можно продолжить так:

1. Добавить поиск книг через `?search=`
2. Добавить форму создания книги
3. Добавить выдачу и возврат книги
4. Вынести общую статистическую карточку в отдельный partial
5. Добавить миграции вместо только `init.sql`
