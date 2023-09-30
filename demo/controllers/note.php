<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Notes';
$currentUserID = 3;

$note = $db->queryOne('SELECT * FROM notes WHERE id=:id', ['id' => $_GET['id']])->fetch();

if (!$note) {
	abort();
}

// assigned the current user's name

if ($note['user_id'] !== $currentUserID) {
	abort(Response::FORBIDDEN);
}

require('views/note.views.php');