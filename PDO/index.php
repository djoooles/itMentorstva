<?php


    $name = "Djolee";
    $password = "123321";
    $password = password_hash($password, PASSWORD_BCRYPT);

    $pdo = new PDO('mysql:host=localhost;dbname=php27',"root","");


    $stmt = $pdo->prepare("INSERT INTO users (username,password) VALUES (:name, :password)");



    $stmt->bindParam(":name", $name,PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);
    //$stmt->execute();


    $stmt2 = $pdo->prepare("SELECT * FROM users WHERE username=:name");
    $stmt2->bindParam(":name", $name);
    $stmt2->execute();

    if($stmt2->rowCount() < 5){
        echo "Imamo manje od 5 korisnika !";
    }
    $users = $stmt2->fetch();


    //var_dump($users);


    ?>