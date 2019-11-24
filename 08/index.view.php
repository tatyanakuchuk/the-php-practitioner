<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Step 8. Booleans</title>
	<style>
		header {
			background-color: #e3e3e3;
			padding: 10px;
		}
	</style>
</head>
<body>
	
	<h1><?= $task['title_of_the_task']; ?></h1>

	<ul>
		<li><strong>Дата выполнения: </strong><?= $task['due_date']; ?></li>
		<li><strong>Ответственный: </strong><?= $task['who_assigned_to']; ?></li>
		<li><strong>Выполнено: </strong><?= $task['completed'] ? 'Выполнено' : 'Не выполнено'; ?></li>
	</ul>
	
</body>
</html>