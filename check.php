<?php
//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error='';
if(trim($email)=='')
{
    $error='Укажіть ваш Email';

}
else if(trim($message)=='')
{
    $error='Опешіть проблему';
}

if($error!='')
{
    echo $error;
    exit;
}

$subject = "?utf-8?B?".base_encode("Сообщение")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n"

mail('luter.s@mail.ru', $subject, $message, $headers)

header('Location: /help.php');
?>