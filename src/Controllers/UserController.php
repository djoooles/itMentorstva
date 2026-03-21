<?php

namespace PHP28\Controllers;

use mysql_xdevapi\Session;
use PHP28\Models\User;
use PHP28\Services\MailService;
use PHP28\Services\SessionService;

class UserController extends SessionService {
    public function login(array $data): void
    {
        if (!isset($data['username']) || empty($data['username'])) {
            die("You must enter a username");
        }

        if (!isset($data['password']) || empty($data['password'])) {
            die("You must enter a password");
        }

        $userModel = new User();
        if (!$userModel->getUserByUsername($data['username'])) {
            die("Username not exists");
        }
        $user = $userModel->getUserByUsername($data['username']);

        if (!password_verify($data['password'], $user['password'])) {
            die("Wrong password");
        }

        $this->setSession('user_id', $user['id'])
            ->setSession('logged_in', true);
    }

    public function register(array $data): void
    {
        if (!isset($data['username']) || empty($data['username'])) {
            die("You must enter a username");
        }

        $userModel = new User();
        if($userModel->userExists($data['username'])){
            die("Username already exists");
        }
        if (!isset($data['password']) || !isset($data['confirm_password'])) {
            die("You must enter a password");
        }

        if($data['password'] !== $data['confirm_password']) {
            die("Passwords do not match");
        }

        $password = password_hash($data['password'], PASSWORD_DEFAULT);


        $userModel = new User();
        $userModel->addNewUser($data['username'], $password);

        $mailService = new MailService();
        $mailService->sendMail("Registracija Uspesna!", "Dobrodosli na nasu platformu!.");
    }




    }