<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Step 5. Separate PHP Logic From Presentation</title>
	<style>
		header {
			background-color: #e3e3e3;
			padding: 10px;
		}
	</style>
</head>
<body>

	<header>

		<ul>
			<?php foreach ($animals as $key => $animal) : ?>

				 <li><span><?= $key; ?> </span><?= $animal; ?></li>
				
			<?php endforeach; ?>	
		</ul>

		<ul>
			<?php 
				foreach ($animals as $key => $animal) {
					echo "<li><span>$key </span>$animal</li>";
				}
			?>	
		</ul>



	</header>
	
</body>
</html>