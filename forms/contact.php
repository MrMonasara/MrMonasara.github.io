<?php

require_once "Mail.php";

$from = 'abhupatel122@gmail.com';
$to = 'abhupatel122@gmail.com';
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];
$subject = $_POST['subject'];

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;
$body = $body_message;

$headers = array(
'From' => $from,
'To' => $to,
'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
'host' => 'ssl://smtp.gmail.com',
'port' => '465',
'auth' => true,
'username' => 'abhupatel122@gmail.com',
'password' => 'twduzypyfrhgvqbb'
));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
     $resArray= array('success' => true);
     header('Content-Type: application/json');
     echo json_encode($resArray);
} else {
     $resArray= array('success' => false);
     header('Content-Type: application/json');
     echo json_encode($resArray);
}
?>