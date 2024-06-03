<?php

class Movies
{

    private string $title;
    private string $time;
    public Genres $genre;

    public function __construct(string $title, string $time, Genres $genre) 
    {
        $this->title        = $title;
        $this->time         = $time;
        $this->genre        = $genre;
    }
        
        function getTitle()
        {
            return $this->title;
        }
    
        function getTime()
        {
            return $this->time;
        }
    }
