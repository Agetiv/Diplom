<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonalds</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>

    <h2>McDonalds</h2>

    <section class="top__imges">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/SITEn_MCD_bonus_1200x400_min.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/SITEn_LunchSetBM_1200x400_min.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/SITEn_Nuggets_1200x400_noPrice_min.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    
    </section>
    
    <section clss="go__menu">
        <h2>Переходь до вибору!</h2>
        <img src="img/arrow.png" class="go__menu__img" alt="">
    
    </section>

    <h3 style="margin-left: 15px; margin:5px;">Borgers</h3>

    <section class="rests borgers">   
        <?php
            $query ="SELECT * FROM food WHERE type = 'burger'";
            $result=mysqli_query($link, $query);
            while($row = $result ->fetch_assoc())
            {
                echo '
                <div class="rest">
                <img src="'.$row["img"].'" class="img__rests" data-bs-toggle="modal" data-bs-target="#'.$row["name"].'" alt="">
                <p class="text__midle"> '.$row["name"].' <br> '.$row["price"].' грн. </p>            
                <p> <button class="butn btn-primary btn-buy" id="'.$row["id"].'" >додати</button></p> 
                </div>
            
                    <div class="modal fade" id="'.$row["name"].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Чікен МакНаггетс 6шт.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <p>'.$row["rest"].'</p>
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

    <h3 style="margin-left: 15px; margin-top:5px;">Snacks</h3>

    <section class="rests snacks">

        <?php 
            $query ="SELECT * FROM food WHERE type = 'snack'";
            $result=mysqli_query($link, $query);
            while($row = $result ->fetch_assoc())
            {
                echo '
                    <div class="rest">
                    <img src="'.$row["img"].'" class="img__rests" data-bs-toggle="modal" data-bs-target="#'.$row["name"].'" alt="">
                    <p class="text__midle"> '.$row["name"].' <br> '.$row["price"].' грн. </p>            
                    <p> <button class="butn btn-primary btn-buy" id="'.$row["id"].'" >додати</button></p> 
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