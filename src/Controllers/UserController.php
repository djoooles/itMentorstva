<?php

namespace PHP28\Controllers;

use PHP28\Models\User;

class UserController {
    public function login(array $data)
    {
        if (!isset($data['username']) || empty($data['username'])) {
            die("You must enter a username");
        }

        if (!isset($data['password']) || empty($data['password'])) {
            die("You must enter a password");
        }

        $userModel = new User();
        if(!$userModel->getUserByUsername($data['username'])) {
            die("Username not exists");
        }
        $user = $userModel->getUserByUsername($data['username']);

        if($user['password'] !== $data['password']) {
            die("Wrong password");
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['loggedIn'] = true;

        echo "Welcome " . $user['username'];



    }
}