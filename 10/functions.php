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


/**
*  Function that determines if a provided age is old enough to enter a 21-and-up night club
* 
* @param number $age provided age
* @return boolean  
*/
function isOldEnough($age) {
	return ($age < 21) ? false : true;
}
