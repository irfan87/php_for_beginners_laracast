<?php

require('functions.php');
// require('router.php');

// connect to our MySQL DB

// initialize PDO
$dsn = "mysql:host=localhost;port=3306;dbname=laracast_php_beginner;charset=utf8mb4;user=root;password=";

$pdo = new PDO($dsn);

// prepare new query
$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);



foreach ($posts as $post) {
	echo "<br>" . $post['title'] . "<br />";
}