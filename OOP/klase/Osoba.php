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

?>