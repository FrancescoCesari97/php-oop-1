<?php


class Production 
{
    private $titolo;
    public $lingua;
    public $voto;
    public $troupe;
    public $nomination;


    function __construct(
        string $titolo, 
        string $lingua, 
        int $voto,
        Troupe $troupe,
        )
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;

        // $this->nomination = $this->voto >= 8 ? true : false;
        $this->set_nomination();
        
        $this->troupe = $troupe;

    }

    //* Metodo per verificare il titolo
    public function set_Titolo($titolo)
    {
        if (empty($titolo) || !is_string($titolo))
        return;
        
        $this->titolo = ucfirst($titolo);
    }

    //* Metodo per stampareil titolo

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