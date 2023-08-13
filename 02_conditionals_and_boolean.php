<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP For Beginners - Conditionals and Boolean</title>
</head>
<style>
.container {
	display: grid;
	place-items: center;
	height: 100vh;
	margin: 0;
	font-family: sans-serif;
}
</style>

<body class='container'>
	<?php
	$bookName = 'Dark Matter.';
	$hasRead = true;

	// $message = $hasRead ? "You have read the $bookName" : "You haven't read the $bookName";

	if ($hasRead) {
		$message = 'You have read the ' . $bookName;
	} else {
		$message = 'No, you haven\'t read the ' . $bookName;
	}
	?>
	<h1><?= $message ?></h1>
</body>

</html>