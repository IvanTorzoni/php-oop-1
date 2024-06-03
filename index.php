<?php 

// importiamo le classi
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/genres.php';

$genre1 = new Genres("Horror");

$movie1 = new Movies("prova", "1 ora", $genre1);
var_dump($movie1);

$genre2 = new Genres("Commedia");

$movie2 = new Movies("prova2", "2 ore", $genre2);
var_dump($movie2);

