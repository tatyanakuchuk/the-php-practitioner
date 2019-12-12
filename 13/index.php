<?php

require('functions.php');
require('Task.php');

$pdo = connect_to_db();
// print_r($pdo);
$tasks = fetch_all_tasks($pdo);

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// var_dump($tasks[0]->foobar());
// var_dump($results[1]->description);
require('index.view.php');