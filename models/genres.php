<?php

class Genres
{

    private string $genre;

    public function __construct(string $genre)
    {

        $this->genre        = $genre;
    }

    function getGenre()
    {
        return $this->genre;
    }
}