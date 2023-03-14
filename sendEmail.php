<?php
require_once 'vendor/autoload.php';
require_once 'Utils/MyEmailServer';
require_once 'Utils/EmailServerInterface';

$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("ptlinhh19@gmail.com", "Test Email", "This is a test email.");

?>