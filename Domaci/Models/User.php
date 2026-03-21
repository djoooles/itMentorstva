<?php

    require "DB.php";

    class User extends DB
    {
        public function userExists(string $email): bool
        {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :name");
            $stmt->bindParam(":name", $username);

            $stmt->execute();

            return $stmt->rowCount() >= 1;
        }

        public function create(string $email, string $password): void
        {
            $stmt = $this->db->prepare("INSERT INTO users (username,password) VALUES (:username, :password)");
            $stmt->bindParam(":username", $email);
            $stmt->bindParam(":password", $password);
            $password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->execute();       }
    }