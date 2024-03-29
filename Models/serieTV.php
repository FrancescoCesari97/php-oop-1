<?php

require_once __DIR__ . "/production.php";

class serieTV extends Production
{

    public $stagioni;


    function __construct(
        string $titolo, 
        string $lingua, 
        int $voto,
        Troupe $troupe,
        int $stagioni
    ) {

        parent::__construct($titolo, $lingua, $voto, $troupe,);
        
        $this->stagioni = $stagioni;
    }
}