<?php

    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
        $id = $_POST['id_order'];//получаем id товара

        session_start();
        if (!isset($_SESSION['courier_order'])) {//если сесия корзины не существует
            $temp[$id] = 1;//в масив заносим количество тавара 1 
        } else {//если в сесии корзины уже есть товары
            $temp = $_SESSION['courier_order'];//заносим в масив старую сесию
            if (!array_key_exists($id, $temp)) {//проверяем есть ли в корзине уже такой товар
            $temp[$id] = 1; //в масив заносим количество тавара 1
            }  
            else{ $temp[$id] = $temp[$id] + 1;

            }  
        }
        $count = count($temp);//считаем товары в корзине
        $_SESSION['courier_order'] = $temp;//записывае в сесию наш масив
        echo $count; //возвращаем количество товаров

?>