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

$filteredBooks = array_filter($books, function ($book) {
	return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020 && $book['author'] === 'Andy Weir';
});

require('index.view.php');