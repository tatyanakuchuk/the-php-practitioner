<?php 
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
