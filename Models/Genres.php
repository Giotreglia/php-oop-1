<?php

// Definisco classe Genres

class Genres {
    public $genre1;
    public $genre2;
    public $genre3;

    public function __construct($genre1, $genre2, $genre3)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
        $this->genre3 = $genre3;
    }
}