<?php

    namespace PHP28\Services;

    use PHPMailer\PHPMailer\PHPMailer;

    class MailService
    {
        private $mail;

        public function __construct()
        {
            $mailer = new PHPMailer(true);
            $mailer->isSMTP();
            $mailer->Host = $_ENV['MAILTRAP_HOST'];
            $mailer->SMTPAuth = true;

            $mailer->Username = $_ENV['MAILTRAP_USERNAME'];
            $mailer->Password = $_ENV['MAILTRAP_PASSWORD'];
            $mailer->Port = $_ENV['MAILTRAP_PORT'];

            $this->mail = $mailer;
        }

            public function sendMail(string $subject, string $text, bool $isHtml = false): void
            {
                $this->mail->setFrom('mdstudiocode@gmail.com', 'MDSTUDIOCODE');
                $this->mail->addAddress('test@inbox.mailtrap.io');

                if($isHtml) {
                    $this->mail->isHTML(true);
                }
                $this->mail->isHTML(true);

                $this->mail->subject = '$subject';
                $this->mail->Body = '$text';


                $this->mail->send();
            }

    }