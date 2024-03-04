<?php


class Production 
{
    public $titolo;
    public $lingua;
    public $voto;


    function __construct($titolo, $lingua, $voto)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;
    }

    //* Metodo per recuperare il titolo
    public function getTitolo()
    {
        return $this->titolo;
    }


}

$amicimiei = new Production("Amici Miei", "Italiano", "8");
// $amicimiei->titolo = "Amici Miei";
// $amicimiei->lingua = "Italiano";
// $amicimiei->voto = "8";

$heat = new Production("Heat", "Inglese", "7");
// $heat->titolo = "Heat";
// $heat->lingua = "Inglese";
// $heat->voto = "7";


var_dump($amicimiei);

var_dump($heat);