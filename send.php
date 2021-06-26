<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$to = ' virusnick@mail.ru';

$subject = 'Новая заявка с сайта';

$message = "ФИО: " . $name . "\r\n" .
    "Телефон: " . $phone . "\r\n" ;

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

$headers = "From: $to " . "\r\n" .
    "Reply-To: $visitor_email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>