<?php

require_once __DIR__ . "/production.php";

class movie extends Production
{

    public $botteghino;
    public $durata;

    function __construct(
        string $titolo, 
        string $lingua, 
        int $voto,
        Troupe $troupe,
        int $botteghino,
        int $durata
    ) {

        parent::__construct($titolo, $lingua, $voto, $troupe,);
        
        $this->botteghino = $botteghino;
        $this->durata = $durata;
    }
}