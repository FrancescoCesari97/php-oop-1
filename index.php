<?php


require_once __DIR__ . "./Models/production.php";

require_once __DIR__ . "./Models/troupe.php";


$amicimiei = new Production("Amici Miei", "Italiano", "8");
// $amicimiei->titolo = "Amici Miei";
// $amicimiei->lingua = "Italiano";
// $amicimiei->voto = "8";

$heat = new Production("Heat", "Inglese", "7");
// $heat->titolo = "Heat";
// $heat->lingua = "Inglese";
// $heat->voto = "7";


$lohobbit = new Production("lo Hobbit", "Inglese", "6");

$troupe = new Troupe("", "", "");

var_dump($amicimiei);

var_dump($heat);

var_dump($lohobbit);