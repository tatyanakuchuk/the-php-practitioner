-- Создаем базу данных
CREATE DATABASE mytodo;

-- Выбираем БД, с которой хотим работать
USE mytodo;

-- Создаем таблицу --
CREATE TABLE todos (

	-- Обьявляем идентификатор
	id,

	-- Указываем тип данных идентификатора (всегда целое число)
	id INTEGER,

	-- Указываем модификатор, который будет автоматически увеличивать 
	-- номер каждого последующего идентификатора на единицу
	id INTEGER AUTO_INCREMENT,

	-- Указываем модификатор, который обеспечивает уникальность
	id INTEGER AUTO_INCREMENT PRIMARY KEY,


	-- Каждой колонке, которую мы обьявляем, 
	-- нужно явно указывать тип контента, который она будет содержать
	description TEXT, 
	completed BOOlEAN

	-- Указываем, какие колонки должны быть заполнены (не пустые)
	description TEXT NOT NULL, 
	completed BOOlEAN NOT NULL

);

-- Добавляем новую строку с данными в таблицу todos
-- id не указываем, т.к. он уже создается автоматически для каждой новой строки
INSERT INTO todos (description, completed)
VALUES ('Go to the store', false);

-- Получить все данные из таблицы todos
SELECT * FROM todos;

-- Получить 1-ю строку из таблицы todos
SELECT * FROM todos WHERE id = 1;