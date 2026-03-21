<?php

    namespace PHP28\Models;
    class User extends Db
    {
        public function getUserByUsername(string $username) : array|false
        {
            $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = :name");
            $stmt->bindParam(":name", $username);
            $stmt->execute();

            return $stmt->fetch();
        }
    }
