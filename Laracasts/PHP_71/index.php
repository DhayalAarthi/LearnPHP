<?php
/**
 * Created by PhpStorm.
 * User: dhayal
 * Date: 2019-04-05
 * Time: 23:24
 */

$books = [
    ['title' => 'Title1','author' => 'Dhayal'],
    ['title' => 'Title2','author' => 'Aarthi'],
];

foreach ($books as [ 'author' => $author, 'title' => $title ]) {
    var_dump($title, $author);
}