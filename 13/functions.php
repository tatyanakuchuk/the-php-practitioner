<?php 

/**
* Функция для подключения к БД
* 
* @return object(PDO) 
*/
function connect_to_db() {
	try {
		return $pdo = new PDO('mysql:host=127.0.0.1;dbname=practitioner', 'root', '');
	} catch (PDOException $e) {
		die($e->getMessage()); // like $task->complete();
	}	
}
/**
* Функция для получения всех записей из БД
* 
* @param PDO Object $pdo результат подключения к БД
* @return string or array 
*/
function fetch_all_tasks($pdo) {
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();	
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

/**
* Функция для вывода данных при отладке кода
* 
* @param string or array $data данные для вывода
* @return string or array 
*/
function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}
