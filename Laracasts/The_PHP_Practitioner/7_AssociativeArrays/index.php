<?php

// $animals = [ 'dog', 'cat' ];

$person = [
	'age' => 27,
	'hair' => 'black',
	'career' => 'Software Enginner'
];

$person['name'] = 'Dhayal';

unset($person['age']);

/*

$animals = ['dog','cat'];
$animals[] = 'Horse';
*/

/*
echo '<pre>';
print_r($person);
var_dump($person);

die(var_dump($person));
*/

require 'index.view.php';