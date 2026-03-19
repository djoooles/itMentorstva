<?php 

    require_once "Modeli/Automobil.php";
    require_once "Modeli/Vozilo.php";
    require_once "Modeli/Autobus.php";
    require_once "Modeli/Avion.php";
    
    $audiA4 = new Automobil();
    $audiA4->marka = "Audi";
    $audiA4->model = "A4";
    $audiA4->boja = "Crvena";
    $audiA4->vrsta = "automobil";

    echo $audiA4->vrsta = "automobil"; 

    $zastava = new Automobil();
    $zastava->marka = "Yugo";
    $zastava->model = "55";
    $zastava->boja = "bela";
    $zastava->tezina = 1100;

    echo $zastava->tezina;

    $bmw = new Automobil();
    $bmw->marka = "BMW";
    $bmw->model = "X5";
    $bmw->boja = "Zuta";
    $bmw->visina = 136;

    echo $bmw->visina;

    $lasta = new Vozilo();
    $lasta->brojSedista = 48;
    $lasta->spratni = false;

    echo $lasta->brojSedista;

    $airBus = new Vozilo();
    $airBus->padobran = true;
    $airBus->pogon = "mlaznjak";

    echo $airBus->padobran;