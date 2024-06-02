<?php 

// importiamo le classi
require_once 'models/movie.php';
require_once 'models/genres.php';

$movie1 = new Movies("prova", "1 ora");
var_dump($movie1);

$movie2 = new Movies("test", "2 ore");
var_dump($movie2);