<?php

class Connection 
{
	public static function make($config) 
	{
		try {

			// return $pdo = new PDO('mysql:host=127.0.0.1;dbname=practitioner', 'root', '');

			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);

		} catch (PDOException $e) {

			die($e->getMessage());
			
		}
	}
}