<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners - Lambda Functions</title>
</head>

<body>
	<h1>Books</h1>
	<?php
	$books = [
		[
			'bookName' => 'Do Android Dreams Electroic Sheep',
			'author' => 'Philip K. Dick',
			'releaseYear' => '1968',
			'purchaseUrl' => 'http://example.com'
		],
		[
			'bookName' => 'Project Hail Mary',
			'author' => 'Andy Weir',
			'releaseYear' => '2021',
			'purchaseUrl' => 'http://example.com'
		],
		[
			'bookName' => 'The Langoliers',
			'author' => 'Stephen King',
			'releaseYear' => '1990',
			'purchaseUrl' => 'http://example.com'
		],
		[
			'bookName' => 'The Martian',
			'author' => 'Andy Weir',
			'releaseYear' => '2011',
			'purchaseUrl' => 'http://example.com'
		],
	];

	// homework
	// function filter($items, $fn)
	// {
	// 	$filteredItems = [];

	// 	foreach ($items as $item) {
	// 		if ($fn($item)) {
	// 			$filteredItems[] = $item;
	// 		}
	// 	}

	// 	return $filteredItems;
	// }

	// $filteredBooks = filter($books, function ($book) {
	// 	// return $book['releaseYear'] >= '1950' && $book['releaseYear'] <= '2020' && $book['author'] === 'Andy Weir';
	// 	return $book['releaseYear'] >= '1990';
	// });

	$filteredBooks = array_filter($books, function ($book) {
		return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020 && $book['author'] === 'Andy Weir';
	});


	?>

	<ol>
		<?php if ($books) : ?>
			<?php foreach ($filteredBooks as $book) : ?>
				<li>
					<div>
						<h4><?= $book['bookName'] ?> - (<?= $book['releaseYear'] ?>)</h4>
						<p>Author: <?= $book['author'] ?></p>
						<p>
							<a href="<?= $book['purchaseUrl'] ?>">Purchase</a>
						</p>
					</div>
					<hr>
				</li>
			<?php endforeach ?>
		<?php else : ?>
			<p>No Books here</p>
		<?php endif ?>
	</ol>
</body>

</html>