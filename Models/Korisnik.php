<?php 
    
    require_once "Baza.php";

    class Korisnik extends Baza
    {
        public function register($email, $sifra)
        {

            $email = $this->sql->real_escape_string($email);
            $sifra = $this->sql->real_escape_string($sifra);
            $this->sql->query("INSERT INTO korisnici (email,sifra) VAlUES ('$email', '$sifra') ");
        }

        public function emailExist($email)
        {
            $email = $this->sql->real_escape_string($email);
            
            $resoult = $this->sql->query("SELECT * FROM korisnici where email = '$email' ");
            if($resoult->num_rows > 0)
                {
                    return true;
                }
            else{
                return false;
            } 
        }
    }