<?php

require_once './../vendor/autoload.php';

require_once './secret/secret.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
//aidakirilovicv@gmail.com
//colorgame.me.22@mail.ru

try {

    $mail = new PHPMailer(true);



    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = MAIL_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = MAIL_NAME;
    $mail->Password = MAIL_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;    

    $mail->From = MAIL_NAME;
    $mail->FromName = 'leha';

    $mail->addAddress(MAIL_NAME);

    $mail->isHTML(false);

    $mail->Subject = "$subject";
    $mail->Body = "<h2>Заявка от клиента</h2><br/> <ul><li>Имя: $username</li><li>Номер телефона: $tel</li><li>Жалобы: $message</li></ul>";
    //$mail->Body = "Заявка от клиента\nИмя: $username\nНомер телефона: $tel\Жалобы: $message";
    $mail->AltBody = "test";

    $mail->send();
    $response['message'] = 'ОК';


} catch (Exception $th) {
    $response['message'] = "Mailer Error:" . $mail->ErrorInfo;
}
