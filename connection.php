<?php

$user = 'root';
$password = 'root';
$db = 'ddeliverybase';
$host = 'localhost';
$port = 3309;

$link = mysqli_init();
$connect = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

//if(! $connect){ 
//   die ('error of connection database');
//}
//else { 
//   echo 'database connected'; 
//}


?>