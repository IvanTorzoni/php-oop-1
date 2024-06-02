<?php

class Movies {

    public string $title;
    public string $time;

    public function __construct(string $title, string $time) {

        $this->title        = $title;
        $this->time         = $time;
    }
}