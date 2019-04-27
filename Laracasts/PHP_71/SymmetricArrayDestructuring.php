<?php

//var_dump("Hello");

//$book = ['The Tile', 'Jeo Johnson'];
//list($title,$author) = $book;
//var_dump( $title, $author );


// Works in 7.1, not in 7.0
$book = ['The Tile', 'Jeo Johnson'];
[ $title, $author ] = $book;
var_dump( $title, $author ); // 'The Title', 'Jeo Jhonson'

// Associative array -  NULL
echo 'Assiciative Array - NULL';
$book = [ 'title' => 'The Tile', 'author' => 'Jeo Johnson'];
[ $title, $author ] = $book;
var_dump( $title, $author ); // NULL, NULL

// Associative array
echo 'Assiciative Array';
$book = [ 'title' => 'The Tile', 'author' => 'Jeo Johnson'];
[ 'title' => $title, 'author' =>$author ] = $book;
var_dump( $title, $author ); // 'The Title', 'Jeo Jhonson'

// Multiple arrays
