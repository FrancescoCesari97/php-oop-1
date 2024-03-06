<?php


require_once __DIR__ . "./Models/production.php";

require_once __DIR__ . "./Models/troupe.php";

require_once __DIR__ . "./Models/serieTV.php";

require_once __DIR__ . "./Models/movie.php";


$Twin_Peaks = new serieTV( 
"Twin Peaks",
"inglese",
 8,
  new Troupe(
   "David Lynch",
   "Frank Byers,",
   " Mary Sweeney"
   ), 2);

$amicimiei = new movie( 
"Amici Miei",
"Italiano",
8,
    new Troupe(
    "Mario Monicelli",
    "Luigi Kuveiller",
    "Ruggero Mastroianni"
    ), 200, 120);   
   
var_dump($amicimiei);



// $amicimiei = new Production(
//  "Amici Miei",
//  "Italiano",
//   8,
//    new Troupe(
//     "Mario Monicelli",
//     "Luigi Kuveiller",
//     "Ruggero Mastroianni"
//     ));
// $amicimiei->titolo = "Amici Miei";
// $amicimiei->lingua = "Italiano";
// $amicimiei->voto = "8";

$heat = new movie(
 "Heat",
 "Inglese",
  7,
  new Troupe(
    "Michael Mann",
    "Dante Spinotti",
    "Pasquale Buba"
    ), 300, 130);
// $heat->titolo = "Heat";
// $heat->lingua = "Inglese";
// $heat->voto = "7";


$lohobbit = new movie(
    "lo Hobbit",
     "Inglese", 
    6,
    new Troupe(
        "Peter Jackson",
        "Andrew Lesnie",
        "Jabez Olssen"
    ), 270, 100);


    $lohobbit->set_Titolo("concerning hobbits");


$productions = [
    $amicimiei,
    $heat,
    $lohobbit,
    $Twin_Peaks

];
 