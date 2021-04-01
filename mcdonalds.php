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

    <section class="rests">
        <div class="rest">
            <img src="/img/2351_Nuggets6_1500x1500_inimitable-_2_min.webp" class="img__rests" alt="">
            <p class="text__midle"> Нагетси</p>            
            <button class="butn" data-bs-toggle="modal" data-bs-target="#food_settings">Деталі</button>       

    </section>


    <!-- Modal -->
    <div class="modal fade" id="food_settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Нагетси</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Смачнюші нагетси, які тануть у роті</p>
                <p>Оберіть кількість:</p>
                <div>
                <input type="checkbox" name="remember" checked="checked" /> x6 <br>
                <input type="checkbox" name="remember" checked="checked" /> x10 <br>
                <input type="checkbox" name="remember" checked="checked" /> x18 <br>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Скасувати</button>
                <button type="button" class="btn btn-primary">Додати до кошику</button>
            </div>
            </div>
        </div>
    </div>








    <?php require "blocks/futter.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <script src="https://maxcdn.dootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>