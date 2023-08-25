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

	// before we refactor this function
	// below is the lambda or anonymous function
	// $filterByAuthor = function ($books, $author) {
	// 	$filteredBooks = [];

	// 	foreach ($books as $book) {
	// 		if ($book['author'] === $author) {
	// 			$filteredBooks[] = $book;
	// 		}
	// 	}

	// 	return $filteredBooks;
	// };

	// $filteredBooksByAuthor = $filterByAuthor($books, 'Andy Weir')

	// after we refactor our author function 
	//  step #1
	// ------------------------------------------------------------------
	// function filter($items, $key, $value)
	// {
	// 	$filteredItems = [];

	// 	foreach ($items as $item) {
	// 		if ($item[$key] === $value) {
	// 			$filteredItems[] = $item;
	// 		}
	// 	}

	// 	return $filteredItems;
	// }

	// $filteredBooksByAuthor = filter($books, 'bookName', 'The Martian');

	// step #2
	// ------------------------------------------------------------------
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

	// $filteredBooksByAuthor = filter($books, function ($book) {
	// 	return $book['releaseYear'] < '2000';
	// });

	// step #3 (use array_filter built-in function)
	// ------------------------------------------------------------------
	$filteredBooks = array_filter($books, function ($book) {
		return $book['author'] === 'Andy Weir';
	});

	?>

	<ol>
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
	</ol>
</body>

</html>