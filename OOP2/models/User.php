<?php

    class User
    {
        public $email;
        public $password;

        public function __construct($email, $sifra)
        {
            $this->email = $email;
            $this->sifra = $sifra;
        }

        public function save()
        {
            $baza = mysqli_connect("localhost", "root","", "web_shop");

            $email = $baza->real_escape_string($this->email);
            $sifra = $baza->real_escape_string($this->sifra);

            $baza->query("INSERT INTO korisnici (email,sifra)  VALUES ('$email', '$sifra') ");
        }
    }