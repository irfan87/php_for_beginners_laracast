<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners - Arrays</title>
</head>

<body>
	<h1>Recommended Books</h1>
	<?php
	$books = [
		'Do Androids Dream of Electronic Sheeps',
		'The Langoliers',
		'Hail Mary',
	];

	print_r($books);
	?>
	<ol>
		<?php foreach ($books as $book) : ?>
		<li>
			<?= $book ?>
		</li>
		<?php endforeach; ?>
	</ol>
</body>

</html>