<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Book extends Model
{
    // Эта модель связана с таблицей books в PostgreSQL.
    // Каждый объект Book = одна строка из таблицы books.
    protected $table = 'books';

    // В таблице нет полей created_at / updated_at, поэтому отключаем timestamps.
    public $timestamps = false;

    /**
     * Поля, которые разрешено заполнять массово через ORM.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'author',
        'year',
        'borrow_count',
        'is_available',
    ];

    /**
     * Автоматическое приведение типов из базы к типам PHP.
     * Например is_available из PostgreSQL придет как bool.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'integer',
        'borrow_count' => 'integer',
        'is_available' => 'boolean',
    ];

    /**
     * Возвращает идентификатор книги.
     */
    public function getId(): int
    {
        // Удобный геттер для views и контроллеров:
        // наружу отдаем уже типизированное значение.
        return (int) $this->getAttribute('id');
    }

    /**
     * Возвращает название книги.
     */
    public function getTitle(): string
    {
        return (string) $this->getAttribute('title');
    }

    /**
     * Возвращает автора книги.
     */
    public function getAuthor(): string
    {
        return (string) $this->getAttribute('author');
    }

    /**
     * Возвращает год издания книги.
     */
    public function getYear(): int
    {
        return (int) $this->getAttribute('year');
    }

    /**
     * Возвращает количество выдач книги.
     */
    public function getBorrowCount(): int
    {
        return (int) $this->getAttribute('borrow_count');
    }

    /**
     * Показывает, доступна ли книга для выдачи.
     */
    public function isAvailable(): bool
    {
        return (bool) $this->getAttribute('is_available');
    }
}
