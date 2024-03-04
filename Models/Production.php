<?php


class Production 
{
    public $titolo;
    public $lingua;
    public $voto;
    public $troupe;
    public $nomination;


    function __construct(
        string $titolo, 
        string $lingua, 
        string $voto,
        // Troupe $troupe,
        )
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;
        // $this->troupe = $troupe;

        // $this->nomination = $this->voto >= 8 ? true : false;
        $this->set_nomination();
    }

    //* Metodo per recuperare il titolo
    public function get_Titolo()
    {
        return $this->titolo;
    }

     //* Metodo per verificare l'idonetà del film per essere nominato 
    public function set_nomination()
    {
        $this->nomination = $this->voto >= 8 ? true : false;
    }


    public function aumentovoto()
    {
        $this->voto++;
        $this->set_nomination();
    }



}