<?php
$id = $_POST['id_tov'];//получаем id
session_start(); //стартуем сессию
$temp = $_SESSION['cart']; //переносим сессию во временную переменную
   if ($temp){
       unset ($temp[$id]);//удаляем запись
      }
$_SESSION['cart'] = $temp; //сохраняем сессию
?>