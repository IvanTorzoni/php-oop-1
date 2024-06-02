<?php

class Genres
{

    private string $genre_1;
    private string $genre_2;

    public function __construct(string $genre_1, string $genre_2)
    {

        $this->genre_1        = $genre_1;
        $this->genre_2         = $genre_2;
    }

    function getGenre1()
    {
        return $this->genre_1;
    }

    function getGenre2()
    {
        return $this->genre_2;
    }
}