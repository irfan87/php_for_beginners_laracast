<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners - Associative Arrays</title>
</head>

<body>
	<h1>Recommended Books</h1>
	<?php
	$books = [
		[
			'bookName' => 'Do Android Dreams Electroic Sheep',
			'author' => 'Philip K. Dick',
			'releaseYear' => 1968,
			'purchaseUrl' => 'http://example.com'
		],
		[
			'bookName' => 'Project Hail Mary',
			'author' => 'Andy Weir',
			'releaseYear' => 2021,
			'purchaseUrl' => 'http://example.com'
		],
		[
			'bookName' => 'The Langoliers',
			'author' => 'Stephen King',
			'releaseYear' => 1990,
			'purchaseUrl' => 'http://example.com'
		],
	];
	?>
	<ol>
		<?php foreach ($books as $book) : ?>
		<li>
			<div>
				<h4><?= $book['bookName'] ?></h4>
				<p>Author: <?= $book['author'] ?></p>
				<p>Release Year: <?= $book['releaseYear'] ?></p>
				<p>
					Click this <a href="<?= $book['purchaseUrl'] ?>">link</a> to purchase.
				</p>
			</div>
			<hr>
		</li>
		<?php endforeach ?>
	</ol>
</body>

</html>