<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDelivery</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>

    <div class="container mt-5">
        <input type="text" neme="text" placeholder="Пошук ресторану за назвою" class="form-control">
    </div>

    <section class="choise">

    </section>

    <section class="first__line">
    <div class="first__line__butns">
            <table>
                <tr>
                    <td><button class="butn" onclick="document.location='chin-chin.php'">японська кухня</button></td>
                </tr>
                <tr>
                    <td><button class="butn">українська кухня</button></td>
                </tr>
                <tr>
                    <td><button class="butn" onclick="document.location='kinza.php'">грузинська кухня</button></td>
                </tr>
                <tr>
                    <td><button class="butn">італійська кухня</button></td>
                </tr>
            </table>
        </div>
        <div class="first__line__rests" style="height: auto;">
            <div class="rest">
                <h2 class="text__header">McDonalds</h2>
                <img src="/img/mcdonalds.png" class="img__rests" alt="">
                <button class="butn" onclick="document.location='mcdonalds.php'">Завітати</button>
            </div>
            <div class="rest">
                <h2 class="text__header">Chin-Chin</h2>
                <img src="/img/chinchin.png" class="img__rests" alt="">
                <button class="butn" onclick="document.location='chin-chin.php'">Завітати</button>
            </div>
            <div class="rest">
                <h2 class="text__header">Kinza</h2>
                <img src="/img/kenza.jpg" class="img__rests" alt="">
                <button class="butn" onclick="document.location='kinza.php'">Завітати</button>
            </div>
            <div class="rest">
                <h2 class="text__header">Lou-Lou</h2>
                <img src="/img/lou-lou.png" class="img__rests" alt="">
                <button class="butn" onclick="document.location='lou-lou.php'">Завітати</button>
            </div>
        </div>
    </section>

    <section class="other__rests" style="height: auto;">
        <div class="other__rests__info">

        </div>
            <div class="other__rests__rests"></div>
                <div class="rest">
                    <h2 class="text__header">Vlavashe</h2>
                    <img src="/img/vlavashe.jpg" class="img__rests" alt="">
                    <button class="butn" onclick="document.location='vlavashe.php'">Завітати</button>
                </div>
                <div class="rest">
                    <h2 class="text__header">KFC</h2>
                    <img src="/img/kfc.png" class="img__rests" alt="chin-chin.">
                    <button class="butn" onclick="document.location='kfc.php'">Завітати</button>
                </div>
                <div class="rest">
                    <h2 class="text__header">Sushi Master</h2>
                    <img src="/img/sushi-master.png" class="img__rests" alt="">
                    <button class="butn" onclick="document.location='vlavashe.php'">Завітати</button>
                </div>
                <div class="rest">
                    <h2 class="text__header">Pomodoro</h2>
                    <img src="/img/pomodoro.gif " class="img__rests" alt="">
                    <button class="butn" onclick="document.location='vlavashe.php'">Завітати</button>
                </div>
            </div>

    </section>

    






    <?php require "blocks/futter.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>