<?php
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

class MyEmailServer implements EmailServerInterface {
    private $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer();
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'phamlinhlc19@gmail.com';
        $this->mailer->Password = 'dfvpnlohtuqvmowy';
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port = 587;
    }

    public function sendEmail($to, $subject, $message) {
        $this->mailer->setFrom('phamlinhlc19@gmail.com');
        $this->mailer->addAddress($to);
        $this->mailer->Subject = $subject;
        $this->mailer->Body = $message;

        if (!$this->mailer->send()) {
            throw new Exception('Email could not be sent.');
        }
    }
}
?>