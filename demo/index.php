<?php

require('functions.php');
// require('router.php');
require('Database.php');

$db = new Database();
$posts = $db->queryAll("select * from posts");

foreach ($posts as $post) {
	echo "<br>" . $post['title'] . "<br />";
}

$post = $db->queryOne("select * from posts where id = 1");

dd($post['title']);