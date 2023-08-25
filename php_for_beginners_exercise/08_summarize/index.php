<?php

$business = [
	'name' => 'laracasts',
	'costs' => 30,
	'categories' => ['Testing', 'PHP', 'JavaScript', 'Mobile Development', 'Web Development']
];

if ($business['costs'] > 20) {
	echo 'not interested<br />';
}

foreach ($business['categories'] as $category) {
	echo $category . ' ';
}

function register($user)
{
	// create the user record and save in the database
	// log / sign in
	// send a welcome email
	// redirect to the new dashboard
}

require('index.view.php');