<?php

require('functions.php');

// Class is sort of like a blueprint
class myTask {
	// свойство объекта
	public $description;
	// свойство объекта
	public $completed = false;

	// метод
	// __construct - специальное имя метода, которое автоматически запускает инициализацию
	public function __construct($description) 
	{
		$this->description = $description;
	}

	// метод
	public function complete()
	{
		$this->completed = true;
	}

	// метод
	public function isComplete()
	{
		return $this->completed;
	}
}

$task = new myTask('Go to the store'); // a new task object

$task->complete(); // change the task from incomplete to complete. We can do this from the outside

// dd($task->isComplete());


// Create list of tasks
$tasks = [
	new myTask('Go to the store'),
	new myTask('Buy the book'),
	new myTask('Finish the task')
];

$tasks[0]->complete();

require('index.view.php');