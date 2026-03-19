<?php

    class Product
    {
        public $ime;
        public $opis;
        public $cena;
        public $slika;
        public $kolicina;

        public function __construct($ime,$opis,$cena,$slika,$kolicina)
        {
            $this->ime = $ime;
            $this->opis = $opis;
            $this->cena = $cena;
            $this->slika = $slika;
            $this->kolicina = $kolicina;
        }

        public function save()
        {
            $baza = mysqli_connect("localhost", "root","", "web_shop");

            $ime = $baza->real_escape_string($this->ime);
            $opis = $baza->real_escape_string($this->opis);
            $cena = $baza->real_escape_string($this->cena);
            $slika = $baza->real_escape_string($this->slika);
            $kolicina = $baza->real_escape_string($this->kolicina);

            $baza->query("INSERT INTO proizvodi(ime, opis, cena, slika, kolicina)  VALUES ('$ime','$opis',$cena,'$slika',$kolicina) ");
        }
    }