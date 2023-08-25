<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners</title>
</head>

<body>
	<h1>Books</h1>
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