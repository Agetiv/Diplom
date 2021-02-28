<?php
$user = 'root';
$password = 'root';
$db = 'ddeliverybase';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if(!$success)
{
    die ('-');
}
else 
{
    echo '+';
}
?>