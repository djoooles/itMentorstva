<?php 

    
    require_once "Models/Korisnik.php";

    $korisnik = new Korisnik();

    $email = "djeole@123.com";
    
    

    if($korisnik->emailExist($email) === false)
        {
            $korisnik->register($email, "123321");
        }
    else{
        die("Vec postoji korisnik sa ovom mejl adresom u bazi!");
    }

    