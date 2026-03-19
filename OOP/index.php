<?php

require_once "klase/Auto.php";

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


$zastava->ofarbaj("crvena");

echo $zastava->boja;
?>