<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Актуальні</title>
    <?php header('refresh: 10'); ?>
</head>
<body>
    <link rel='stylesheet' href='/blocks/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <?php require 'blocks/translit.php';?>

    <?php require 'blocks/courier_header.php';?>

    <h4 style="text-align: center; margin: 10px;">Актуальні замовлення:</h4>

    <section class="orders__list">
        <?php
            require 'connection.php';

            $query ="SELECT * FROM orders WHERE courier='' and done='0'";
            $result=mysqli_query($link, $query);
            while($row = $result ->fetch_assoc())
            {
                echo '
                <button class="butn butn__orders" style="width: 100%; margin: 5px;" data-bs-toggle="modal" data-bs-target="#'.translit($row["ordertext"]).'">'.$row["address"].'</button>
                
                <div class="modal fade" id="'.translit($row["ordertext"]).'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$row["address"].'</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                            <p>'.$row["time"].'</p>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Назад</button>

                            <p> <button class="btn btn-primary btn-buy" id="'.$row["id"].'" >Беру!</button></p> 
 
                        </div>
                        </div>
                    </div>
                </div>
                ';
            }      

        ?>
        <script>
        $('.btn-buy').click(function () {//клип на кнопку
            var id = $(this).attr('id'); //получаем id этой кнопки
                $.ajax({//передаем ajax-запросом данные
                type: "POST", //метод передачи данных
                url: '/add_courier.php',//php-файл для обработки данных
                data: {id_order: id},//передаем наши данные
                success: function(data) {//
                    $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
                    }
                });
                location="courier_order.php";
            });
        </script>
        
    </section>

    <section class="hotline__call" style="text-align: center;">
        <p style="text-align: center;"><button class="butn">Зв'язок з оператором</button></p>
    </section> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>