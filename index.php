<?php


require_once __DIR__ . "./Models/production.php";

require_once __DIR__ . "./Models/troupe.php";


$amicimiei = new Production("Amici Miei",
 "Italiano",
  "8",
   new Troupe("Mario Monicelli", "Luigi Kuveiller", "Ruggero Mastroianni"));
// $amicimiei->titolo = "Amici Miei";
// $amicimiei->lingua = "Italiano";
// $amicimiei->voto = "8";

$heat = new Production("Heat",
 "Inglese",
  "7",
  new Troupe("Michael Mann", "Dante Spinotti", "Pasquale Buba"));
// $heat->titolo = "Heat";
// $heat->lingua = "Inglese";
// $heat->voto = "7";


$lohobbit = new Production(
    "lo Hobbit",
     "Inglese", 
    "6",
    new Troupe("Peter Jackson", "Andrew Lesnie", "Jabez Olssen"));



$productions = [
    $amicimiei,
    $heat,
    $lohobbit
];
 

var_dump($amicimiei);

var_dump($heat);

var_dump($lohobbit);