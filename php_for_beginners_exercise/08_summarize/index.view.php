<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo</title>
</head>

<body>
	<h1><?= $business['name'] ?></h1>
	<div>
		<h4>Categories</h4>
		<ul>
			<?php foreach ($business['categories'] as $category) : ?>
			<li><?= $category ?></li>
			<?php endforeach ?>
		</ul>
	</div>
</body>

</html>