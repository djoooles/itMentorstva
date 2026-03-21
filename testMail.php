<?php

    require_once './vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();


    $mailer = new PHPMailer(true);
    $mailer->isSMTP();
    $mailer->Host = $_ENV['MAILTRAP_HOST'];
    $mailer->SMTPAuth = true;

    $mailer->Username = $_ENV['MAILTRAP_USERNAME'];
    $mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
    $mailer->Port = $_ENV['MAILTRAP_PORT'];

    $mailer->setFrom('mdstudiocode@gmail.com', 'MDSTUDIOCODE');
    $mailer->addAddress('test@inbox.mailtrap.io');
    $mailer->isHTML(true);

    $mailer->subject = 'Test Email';
    $mailer->Body = '../racuni/g';

    $response = $mailer->addAttachment('racuni/invoice.pdf', name: 'invoice.pdf');

    $path = realpath('racuni/invoice.pdf');


    if(!$response){
        dir("Inovice nije dodat");
    }

    $mailer->send();
