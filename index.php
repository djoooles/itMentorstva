<?php

class Auto
{
    public $marka;
    public $model;
    public $kubikaza;
    public $boja;

    public function snimiAuto()
    {
        echo "Novi auto: ".$this->marka." ".$this->model;
    }
}

$audiA4 = new Auto();
$audiA4->marka = "Audi";
$audiA4->model = "A4";
$audiA4->boja = "Plava";
$audiA4->kubikaza = 2000;
$audiA4->snimiAuto();

$zastava = new Auto();
$zastava->marka = "Zastava";
$zastava->model = "Yugo 55";
$zastava->boja = "Bela";
$zastava->kubikaza = 1600;
$zastava->snimiAuto();




