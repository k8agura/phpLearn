-- Этот SQL автоматически выполняется PostgreSQL при первой инициализации контейнера.
-- Здесь создаем учебную таблицу books и наполняем ее стартовыми данными.
CREATE TABLE IF NOT EXISTS books (
    -- Уникальный идентификатор книги.
    id SERIAL PRIMARY KEY,
    -- Название книги.
    title VARCHAR(255) NOT NULL,
    -- Автор книги.
    author VARCHAR(255) NOT NULL,
    -- Год издания.
    year INTEGER NOT NULL,
    -- Сколько раз книгу уже брали.
    borrow_count INTEGER NOT NULL DEFAULT 0,
    -- Можно ли взять книгу прямо сейчас.
    is_available BOOLEAN NOT NULL DEFAULT TRUE
);

-- Начальные записи для учебного проекта.
INSERT INTO books (title, author, year, borrow_count, is_available)
VALUES
    ('Clean Code', 'Robert C. Martin', 2008, 7, TRUE),
    ('Refactoring', 'Martin Fowler', 2018, 5, FALSE),
    ('The Pragmatic Programmer', 'Andrew Hunt', 1999, 9, TRUE)
-- Если сиды уже были вставлены раньше, повторно ничего не ломаем.
ON CONFLICT DO NOTHING;
