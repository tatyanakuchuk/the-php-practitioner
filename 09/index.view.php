<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Step 9. Conditionals</title>
</head>
<body>
	
	<h1><?= $task['title_of_the_task']; ?></h1>

	<ul>
		<li>
			<strong>Дата выполнения: </strong><?= $task['due_date']; ?>
		</li>
		<li>
			<strong>Ответственный: </strong><?= $task['who_assigned_to']; ?>
		</li>
		<li>

			<strong>Выполнено: </strong>

			<?php if($task['completed']) : ?>

				<span>&#x2611</span>

			<?php else : ?>

				<span>&#x2718</span>
				
			<?php endif; ?>

		</li>
	</ul>
	
</body>
</html>