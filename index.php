<?php 

// importiamo le classi
require_once 'models/movie.php';
require_once 'models/genres.php';

$genre_1 = new Genres("Horror", "Splatter");

$movie1 = new Movies("prova", "1 ora", $genre_1);
var_dump($movie1, $genre_1);

$genre_2 = new Genres("Fantasy", "Cartoon");

$movie2 = new Movies("test", "2 ore", $genre_2);
var_dump($movie2, $genre_2);
