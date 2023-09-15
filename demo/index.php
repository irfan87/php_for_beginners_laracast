<?php

require('functions.php');
// require('router.php');

require('Database.php');

$config = require('config.php');

$db = new Database($config['database']);
$posts = $db->queryAll("select * from posts")->fetchAll();

foreach ($posts as $post) {
	echo "<br>" . $post['title'] . "<br />";
}

$post = $db->queryOne("select * from posts where id = 1")->fetch();

dd($post['title']);
