<?php

require('functions.php');
// require('router.php');

require('Database.php');

$config = require('config.php');

$db = new Database($config['database']);

// $queries = "select * from posts";
// $posts = $db->queryAll($queries)->fetchAll();

// dd($posts);

$id = $_GET['id'];

$query = "select * from posts where id = ?";

$post = $db->queryOne($query, [$id])->fetch();

dd($post);