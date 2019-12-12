<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Make a Router</title>
</head>
<body>

	<nav>
		<ul>
			<li><a href="/about">About as</a></li>
			<li><a href="/contact">Contact Us</a></li>
		</ul>
	</nav>
	
	<ul>
		<?php foreach($tasks as $task): ?>

			<li>

				<?php if ($task->completed): ?>
				
					<strike><?= $task->description; ?></strike>

				<?php else: ?>

					<?= $task->description; ?>

				<?php endif; ?>

			</li>

		<?php endforeach; ?>
	</ul>
</body>
</html>