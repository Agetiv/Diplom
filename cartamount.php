<?php
$id = $_POST['id_tov'];//получаем id
$col = $_POST['col_tov'];//получаем количество
        
session_start(); //стартуем сессию
$temp = $_SESSION['cart']; //переносим сессию во временную переменную
$temp[$id]=$col; //изменяем количество
$_SESSION['cart'] = $temp; //сохраняем сессию
?>