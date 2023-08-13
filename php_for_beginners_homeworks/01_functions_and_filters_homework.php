<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners - Functions and Filters</title>
</head>

<body>
	<?php
	// the list of my favorite movies
	$favMovies = [
		[
			'title' => 'Interstellar',
			'synopsis' => 'When Earth becomes uninhabitable in the future, a farmer, and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planets for humans.',
			'releaseYear' => '2014',
			'actors' => ['Matthew McConaughey', 'Anne Hathaway', 'Jessica Chastain']
		],
		[
			'title' => 'The Pursuit of Happyness',
			'synopsis' => 'A struggling salesman takes custody of his son as he is poised to begin a life-changing professional career',
			'releaseYear' => '2006',
			'actors' => ['Will Smith', 'Jaden Smith', 'Thandiwe Newton']
		],
		[
			'title' => 'Titanic',
			'synopsis' => 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic',
			'releaseYear' => '1997',
			'actors' => ['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane']
		],
		[
			'title' => 'The Exorcist',
			'synopsis' => 'When a teenage girl is possessed by a mysterious entity, her mother seeks the help of two priests to save her daughter.',
			'releaseYear' => '1973',
			'actors' => ['Ellen Burstyn', 'Max von Sydow', 'Linda Blair']
		],
	];

	// function that filter the year of the movies that is released from 2000 and upper
	function filterMoviesYearRelease($movies)
	{
		$filterYearRelease = [];

		foreach ($movies as $movie) {
			if ($movie['releaseYear'] >= '2000') {
				$filterYearRelease[] = $movie;
			}
		}

		return $filterYearRelease;
	}

	?>
	<h1>My Favorite Movies (2000 and upper)</h1>

	<ul>
		<?php foreach (filterMoviesYearRelease($favMovies) as $movie) : ?>
		<li>
			<h1><?= $movie['title'] ?> - (<?= $movie['releaseYear'] ?>) </h1>
			<p><?= $movie['synopsis'] ?></p>
			<p>
				<strong>Stars: </strong>
			<ul>
				<?php foreach ($movie['actors'] as $actor) : ?>
				<li><?= $actor ?></li>
				<?php endforeach ?>
			</ul>
			</p>
		</li>
		<?php endforeach ?>
	</ul>
</body>

</html>