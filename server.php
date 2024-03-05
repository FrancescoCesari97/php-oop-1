<?php


require_once __DIR__ . "./Models/production.php";

require_once __DIR__ . "./Models/troupe.php";

require_once __DIR__ . "./Models/serieTV.php";


$serie_TV = new serieTV( 
"Amici Miei",
"Italiano",
 8,
  new Troupe(
   "Mario Monicelli",
   "Luigi Kuveiller",
   "Ruggero Mastroianni"
   ), 3);
   
var_dump($serie_TV);

exit;

$amicimiei = new Production(
 "Amici Miei",
 "Italiano",
  8,
   new Troupe(
    "Mario Monicelli",
    "Luigi Kuveiller",
    "Ruggero Mastroianni"
    ));
// $amicimiei->titolo = "Amici Miei";
// $amicimiei->lingua = "Italiano";
// $amicimiei->voto = "8";

$heat = new Production(
 "Heat",
 "Inglese",
  7,
  new Troupe(
    "Michael Mann",
    "Dante Spinotti",
    "Pasquale Buba"
    ));
// $heat->titolo = "Heat";
// $heat->lingua = "Inglese";
// $heat->voto = "7";


$lohobbit = new Production(
    "lo Hobbit",
     "Inglese", 
    6,
    new Troupe(
        "Peter Jackson",
        "Andrew Lesnie",
        "Jabez Olssen"
    ));


    $lohobbit->set_Titolo("concerning hobbits");


$productions = [
    $amicimiei,
    $heat,
    $lohobbit
];
 