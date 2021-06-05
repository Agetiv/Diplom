<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кошик</title>
   <?php // header('refresh: 15'); ?> <!-- обновление страницы каждые 15 сек -->
</head>
<body>

    <?php require 'blocks/header.php' ?>    
    
    <?php date_default_timezone_set('Europe/Kiev'); ?>


    <h2 style="margin-left: 30px; margin-top:20px;">Кошик</h2>

    <section class="page">
        <?php session_start();

        if (!isset($_SESSION['cart'])):?>

        <h3>Порожньо...</h3>

        <?php else :?>
        <table>
            <?php $temp=$_SESSION['cart'];
                foreach($temp as $id=>$kol): ?>
                <tr id="<?=$id?>">
                    <td>
                        <?php 
                            $query ="SELECT * FROM food WHERE id='$id'";
 
                            $result = mysqli_query($link, $query); 
                            if($result)
                            {
                                while ($row = mysqli_fetch_row($result)) {
                                    #$order.='+';
                                    $order.="<li>$row[1]</li>";
                                    $rest = $row[2];
                                    echo "<li>$row[1]</li>";

                                }                                
                            }
                        ?>
                    </td>
                    <td>
                    <?php 
                            $query ="SELECT price FROM food WHERE id='$id'";
 
                            $result = mysqli_query($link, $query); 
                            if($result)
                            {
                                while ($row = mysqli_fetch_row($result)) {
                                    $money = $row[0];
                                    echo " - $row[0] грн.";
                                }                                
                            }
                        ?>
                    </td>
                    <td><input type="number" class="count-product border" id="<?=$id?>" value="<?=$kol?>">
                    <?php 
                        $totalprise=$totalprise+($money * $kol);
                        $order.=" x";
                        $order.="$kol"; 
                    ?></td>
                    <td><button class="butn__del btn-default btn-del" id="<?=$id?>" onClick="window.location.reload( true );">Х</button></td>
                </tr>
                <?php endforeach; ?>                
        </table>

        <?php // проверка на наличие товаров в корзине
            if( isset($_SESSION['cart']) && $totalprise == 0)
            {
                $_SESSION['cart']=NULL;

                ?><script>
                setTimeout(function(){
                    location.reload();
                }, 100);
                </script><?php
            }
        ?>

        <br>
        <p>--------------------------------------------------</p>
        <h7 style="margin-left: 25px;">Товарів на сумму: <?php echo $totalprise;?> грн.</h7><br>
        <h7 style="margin-left: 25px;">Доставка: 45 грн.</h7>
        <h5 style="margin-left: 25px;">Усього: <?php echo $totalprise+45;?> грн.</h5>
        <p>--------------------------------------------------</p>

        <form action="cart.php" style="margin-left: 25px;">
            <p><b>Коли доставити?</b></p>
            <?php
                $time = date('g');

            ?>
            <form action="" method="POST">
                <p><input name="timeJack" type="radio" value="default" checked> Як умога швидше</p>
                <p><input name="timeJack" type="radio" value="planned"> Обрати час</p>
                <p><input type="time" name="timetodo"></p>

                <p><small>*будьте уважні, кур'єр не зможе зробити доставку раніше ніж через годину від поточного часу*</small></p>
            </form>


            <!--<p><input type="submit" value="Выбрать"></p>-->
        </form>

        <h5 style="margin-left: 25px;">Адреса доставки: <?php echo $_SESSION['address']?></h5>
        <a class="btn btn-outline-primary" style="margin-left: 25px;" href="change_info.php">змінити</a>

        <?php
            # Если кнопка нажата
            if( isset( $_POST['orderTime'] ) )
            {   #проверка на наличие отмененных заказов
                $username = $_SESSION['username'];
                $query = "SELECT * FROM orders Where user ='$username'";
                $result = mysqli_query($link, $query);
                while($row = $result ->fetch_assoc())
                {
                    if($row["done"]=='2')
                    {
                        ?><script type="text/javascript">
                        alert("Вибачте, але на данний момент ви не можете зробити замовлення, зв'яжіться з оператором");
                        location="cabinet.php";
                        </script><?php

                        exit;
                    }
                }


                

                if(isset($order))
                {   
                    if(!isset($_SESSION['username']))
                    {   
  
                       ?> <script>                               
                        alert("Авторизуйтесь!");                           
                        </script> <?php
                    }
                    else
                    {                     
                        $username = $_SESSION['username'];
                        $address = $_SESSION['address'];
                        $phone = $_SESSION['phone'];
                        $coment = $_POST['message'];
                        $active = 1;
                        $done = 0;
                        $time = date('j, n, Y, g:i a');

                        $query="INSERT INTO orders (user, address, phone, rest, ordertext, price, coment, active, courier, done, time) 
                            VALUES ('$username', '$address', '$phone', '$rest', '$order', '$totalprise', '$coment', '$active', ' ', '$done', '$time')";
                        $result = mysqli_query($link, $query);
                        if($result)
                        { 
                            ?><script type="text/javascript">
                            alert("Дякуємо за замовлення");
                            location="cabinet.php";
                            </script><?php
                            unset ($_SESSION['cart']);
                        }
                        else
                        {
                            echo "Error";
                            echo($query);
                        }     
                    }                 
                          
                }
            }
        ?>
        
        <p style="margin-left: 25px; margin-top: 15px">Коментар:</p>
 
        <div >
            <form action="" class="" method="POST">
                <textarea name="message" placeholder="Щось бажаєте?" class="form-control" style="width: 300px; height:100px; margin-left: 25px;"></textarea><br>
                <input type="submit" class="butn" style="margin-left: 30px;" name="orderTime" value="Замовити">
            </form>
        </div>

          
        <?php endif; ?>    
        
        

        <script src="jquery-2.2.3.min.js"></script>   
        

        <script>
            //изменение количества
                $('.count-product').change(function () { //изменение содержимого инпута     
                var col = $(this).val(); //получаем количество
                if (col<1){ col = 1; $(this).val(1); } //если ввели меньше 1 установим 1
                var id = $(this).attr('id'); //получаем id товара
                    $.ajax({//аякс-запрос
                    type: "POST",//метод
                    url: 'cartamount.php',//куда передаем
                    data: {col_tov: col, id_tov: id},//данные
                    success: function() {//получаем результат
                    //тут можно пересчитать сумму
                        }
                    });
                });
                //удаление товара
                $('.btn-del').click(function () { //клик на кнопку     
                var id = $(this).attr('id'); //получаем id товара
                    $.ajax({//аякс-запрос
                    type: "POST",//метод
                    url: 'cartdel.php',//куда передаем
                    data: {id_tov: id},//данные
                    success: function(data) {//получаем результат
                            //тут можно пересчитать сумму
                            $('tr#'+id).css('display', 'none');//скрываем строку таблицы
                        }
                    });
                });

        </script>
     </section>

    <?php require 'blocks/futter.php' ?>

</body>
</html>