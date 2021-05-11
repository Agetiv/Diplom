<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chin-Chin</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>
    <?php require "blocks/translit.php"; ?>


    <h2>Chin-Chin</h2>
    <h4>Ресторан японської кухні "На Здоров'я!"</h4>

    <h3 style="margin-left: 15px; margin-top:5px;">Салати</h3>

    <section class="rests salad">    
    <?php 
            $query ="SELECT * FROM food WHERE type = 'salad'";
            $result=mysqli_query($link, $query);
            while($row = $result ->fetch_assoc())
            {
                echo '
                <div class="rest">
                <img src="'.$row["img"].'" class="img__rests" data-bs-toggle="modal" data-bs-target="#'.translit($row["name"]).'" alt="">
                <p class="text__midle"> '.$row["name"].' <br> '.$row["price"].' грн. </p>            
                <p> <button class="butn btn-primary btn-buy" id="'.$row["id"].'" >додати</button></p> 
                </div>
            
                    <div class="modal fade" id="'.translit($row["name"]).'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">'.$row["name"].'</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <p>'.$row["rest"].'</p>
                                            <p><img src="'.$row["img"].'" class="img__rests" alt=""></p>
                                            <p>'.$row["script"].'</p>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">назад</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ';
            }
        ?>
    </section>

        


    

    <script>
        $('.btn-buy').click(function () {//клип на кнопку
            var id = $(this).attr('id'); //получаем id этой кнопки
                $.ajax({//передаем ajax-запросом данные
                type: "POST", //метод передачи данных
                url: '/addtocart.php',//php-файл для обработки данных
                data: {id_tov: id},//передаем наши данные
                success: function(data) {//
                    $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
                    }
                });
        });
    </script>







    <?php require "blocks/futter.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <script src="https://maxcdn.dootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>