<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Step 4. PHP and HTML</title>
	<style>
		header {
			background-color: #e3e3e3;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>

	<header>
		<h1>
			
			<?php

			$name = $_GET['name'];

			echo "Hello, " . htmlspecialchars($name);

			?>

		</h1>

		<h2>

			<?= "Hello, " . htmlspecialchars($_GET['name']); ?>
			
		</h2>
	</header>
	
</body>
</html>