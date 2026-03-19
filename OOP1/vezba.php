<?php 

class Osoba
{
    public $ime;
    public $prezime;
    public $godinaRodjenja;
    public $visina;
    public $tezina;

    public function racunajGodine()
    {
        $trenutnaGodina = date("Y");
        echo $trenutnaGodina-$this->godinaRodjenja;
    }
}

$djordje = new Osoba();
$djordje->ime = "Djordje";
$djordje->prezime = "Stojkovic";
$djordje->godinaRodjenja = 1999;
$djordje->visina = 185;
$djordje->tezina = 100;

$djordje->racunajGodine();






?>