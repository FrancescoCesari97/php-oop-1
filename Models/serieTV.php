<?php

require_once __DIR__ . "/production.php";

class serieTV extends Production
{

    public $seasons;


    function __construct(
        string $titolo, 
        string $lingua, 
        int $voto,
        Troupe $troupe,
        int $seasons
    ) {

        parent::__construct($titolo, $lingua, $voto, $troupe,);
        
        $this->seasons = $seasons;
    }
}