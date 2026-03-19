<?php 


require_once "klase/Osoba.php";

$djordje = new Osoba();
$djordje->ime = "Djordje";
$djordje->prezime = "Stojkovic";
$djordje->godinaRodjenja = 1999;
$djordje->visina = 185;
$djordje->tezina = 100;
$djordje->racunajGodine();