<?php

class Movies
{

    private string $title;
    private string $time;

    public function __construct(string $title, string $time)
    {

        $this->title        = $title;
        $this->time         = $time;
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
