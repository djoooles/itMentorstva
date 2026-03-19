<?php 

    
    require_once "Models/Korisnik.php";
    

    $korisnik = new Korisnik();

    $email = "asdasd123123123@123.com";

    $korisnik->setName("angie");
    echo $korisnik->getName();

    $korisnik->delete("djole@djole.com");

    $korisnik->update("djole@djole.com", 'djole@djole.com', '12345' );
    
    
    

    if($korisnik->emailExist($email) === false)
        {
            $korisnik->register($email, "123321");
        }
    else{
        die("Vec postoji korisnik sa ovom mejl adresom u bazi!");
    }

    