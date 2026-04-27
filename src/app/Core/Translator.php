<?php

declare(strict_types=1);

namespace App\Core;

final class Translator
{
    /**
     * Все строки выбранной локали загружаются сюда из src/lang/<locale>.php.
     *
     * @var array<string, mixed>
     */
    private array $messages = [];

    public function __construct(
        private readonly string $locale,
        private readonly string $fallbackLocale,
        private readonly string $langPath
    ) {
        // При создании переводчика сразу подгружаем активную локаль.
        $this->messages = $this->loadMessages($locale);
    }

    /**
     * Возвращает активную локаль переводчика.
     */
    public function getLocale(): string
    {
        // Нужна шаблонам, чтобы выставить lang="ru" и подсветить активный язык.
        return $this->locale;
    }

    /**
     * Возвращает перевод по ключу или ключ, если перевод не найден.
     */
    public function translate(string $key): string
    {
        // Ищем строку по ключу вида books.title или stats.cards.total_books.title.
        $value = $this->resolve($this->messages, $key);

        if (is_string($value)) {
            return $value;
        }

        // Если в текущей локали ключ не найден, пробуем запасную локаль.
        $fallback = $this->resolve($this->loadMessages($this->fallbackLocale), $key);

        // Если не нашли и там, возвращаем сам ключ.
        return is_string($fallback) ? $fallback : $key;
    }

    /**
     * Читает один файл локали и возвращает массив переводов.
     *
     * @return array<string, mixed>
     */
    private function loadMessages(string $locale): array
    {
        $file = $this->langPath . DIRECTORY_SEPARATOR . $locale . '.php';

        if (!is_file($file)) {
            return [];
        }

        $messages = require $file;

        return is_array($messages) ? $messages : [];
    }

    /**
     * Проходит по вложенному массиву переводов по сегментам ключа.
     * Пример: books.title -> ['books']['title']
     *
     * @param array<string, mixed> $messages
     */
    private function resolve(array $messages, string $key): mixed
    {
        $segments = explode('.', $key);
        $value = $messages;

        foreach ($segments as $segment) {
            if (!is_array($value) || !array_key_exists($segment, $value)) {
                return null;
            }

            $value = $value[$segment];
        }

        return $value;
    }
}
