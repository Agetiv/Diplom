<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Замовлення</title>
    <?php header('refresh: 10'); ?>

</head>
<body>

    <?php require 'blocks/courier_header.php';?>

    <section class="page">
        
        <?php session_start();

        if (!isset($_SESSION['courier_order'])):?>

        <h3>Відсутньо</h3>

        <?php else :?>
        <table>
            <?php $temp=$_SESSION['courier_order'];
                foreach($temp as $id=>$kol): ?>
                <tr id="<?=$id?>">
                    <td>
                        <?php # вписываем курьера в заказ
                            $couriername = $_SESSION['courier'];
                            $query = "UPDATE orders SET courier = '$couriername' WHERE id LIKE '$id';";
                            $result = mysqli_query($link, $query);
                        ?>

                        <?php # выводим данные по взятому заказу
                            $query ="SELECT * FROM orders WHERE id='$id'";
 
                            $result = mysqli_query($link, $query); 
                            while($row = $result ->fetch_assoc())
                            {
                                echo '
                                <div style="margin-left: 15px;">
                                    <p>'.$row["time"].'</p>
                                    <p><b>'.$row["address"].'</b></p>
                                    <p><b>'.$row["rest"].'</b></p>
                                    <p>------------------------</p>
                                    <p>'.$row["ordertext"].'</p>
                                    <p>------------------------</p>
                                    <p>Ціна: '.$row["price"].' грн.</p>
                                    <p>Клієнт: '.$row["user"].'</p>
                                    <p>Телефон:<br>'.$row["phone"].'</p>
                                    <p>Коли доставити: '.$row["timetodo"].'</p>
                                    <p>Коментар:<br>'.$row["coment"].'</p>
                                </div>

                                ';
                            }          
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>                
        </table>
        <br>   
        
        <?php date_default_timezone_set('Europe/Kiev'); ?>

        <?php
            # Если кнопка подтверждения нажата
            if( isset( $_POST['orderOver'] ) )
            {
                $query = "UPDATE orders SET done = '1' WHERE id LIKE '$id';";
                $result = mysqli_query($link, $query);
                ?><script type="text/javascript">
                alert("Молодець!");
                location="courier.php";
                </script><?php
                unset ($_SESSION['courier_order']);
            }
        ?>   

        <?php
            # Если кнопка отказа нажата
            if( isset( $_POST['orderDrop'] ) )
            {   
                $couriername = $_SESSION['courier'];
                $query = "UPDATE orders SET courier = '' WHERE id LIKE '$id';";
                $result = mysqli_query($link, $query);
                ?><script type="text/javascript">
                alert("Очікуйте зв'язку з оператором");
                location="courier.php";
                </script><?php
                unset ($_SESSION['courier_order']);
            }
        ?> 

        <form method="POST">
            <input type="submit" class="butn" style="margin-left: 30px;" name="orderOver" value="Доставлено"> <br>
            <input type="submit" class="butn" style="margin-left: 30px; color:red; border: 1.5px solid red;" name="orderDrop" value="Відмовитись">
        </form>

        <?php endif; ?>    

        <script src="jquery-2.2.3.min.js"></script>   
     </section>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
     </script>
</body>
</html>