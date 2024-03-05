<?php


class Troupe {
    public $director;
    public $dop;
    public $editor;

    function __construct(
        string $director, 
        string $dop, 
        string $editor,
        
    )
        {
        $this->director = $director;
        $this->dop = $dop;
        $this->editor = $editor;
            
        }
}