<?php

    require_once "models/User.php";

    $korisnikDjole = new User("123@123.com", "123321");
    $korisnikDjole->save();
    $korisnikMike = new User("mike@mike.com", "123321");

    echo $korisnikDjole->email;
    echo $korisnikMike->email;
                            
    

