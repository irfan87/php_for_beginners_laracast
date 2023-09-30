<?php

require('functions.php');
// require('router.php');

require('Database.php');

$config = require('config.php');

$db = new Database($config['database']);
$posts = $db->queryAll("select * from notes")->fetchAll();

foreach ($posts as $post) {
	echo "<br>" . $post['body'] . "<br />";
}

// $id = $_GET['id'];
// $query = "select * from notes where id = ?";

// $post = $db->queryOne($query, [$id])->fetch();

// dd($post['body']);