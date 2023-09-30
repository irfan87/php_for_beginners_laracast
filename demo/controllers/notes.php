<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "My Notes";

$notes = [];

$notes = $db->queryOne("SELECT * FROM notes WHERE USER_ID=3")->fetchAll();

require('views/notes.views.php');