<?php

use PHP28\ItMentorstva\User;

if(!isset($_POST['email']) || !isset($_POST['password'])) {
        die("Please fill in all the required fields.");
    }

    require_once "../models/User.php";

    $user = new User();

    if($user->userExists($_POST['email']) ){
        die("This email is already taken.");
    }

    $user->create($_POST['email'], $_POST['password']);