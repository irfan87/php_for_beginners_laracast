<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners - Functions and Filters</title>
</head>

<body>
	<h1>Books</h1>
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
		[
			'bookName' => 'The Martian',
			'author' => 'Andy Weir',
			'releaseYear' => 2011,
			'purchaseUrl' => 'http://example.com'
		],
	];

	function filterByAuthor($books, $author)
	{
		$filteredBooks = [];

		foreach ($books as $book) {
			if ($book['author'] === $author) {
				$filteredBooks[] = $book;
			}
		}

		return $filteredBooks;
	}
	?>
	<ul>
		<?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
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
	</ul>
</body>

</html>