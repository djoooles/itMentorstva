<?php

    require_once "models/Product.php";

    $bmw = new Product("BMW","E60",5000,"bmwE60.jpg",1);
    $bmw->save();