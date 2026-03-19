<?php 
    
    class Baza
    {
        public $konekcija;

        const HOST = "localhost";
        const DB_USER = "root";
        const DB_PASSWORD = "";
        const DB_NAME = "web_shop";

        public function __construct()
        {
            $this->$konekcija = mysqli_connect(self::HOST,SELF::DB_USER,SELF::DB_PASSWORD,SELF::DB_NAME);
        }
    }

    