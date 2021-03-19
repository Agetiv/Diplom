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
                    <td><button class="butn">японська кухня</button></td>
                </tr>
                <tr>
                    <td><button class="butn">українська кухня</button></td>
                </tr>
                <tr>
                    <td><button class="butn">грузинська кухня</button></td>
                </tr>
                <tr>
                    <td><button class="butn">італійська кухня</button></td>
                </tr>
            </table>
        </div>
        <div class="first__line__rests">
            <div class="rest">
                <h2 class="text__header">McDonalds</h2>
                <img src="/img/mcdonalds.png" class="img__rests" alt="">
                <button class="butn">Завітати</button>
            </div>
            <div class="rest">
                <h2 class="text__header">Chin-Chin</h2>
                <img src="/img/chinchin.png" class="img__rests" alt="">
                <button class="butn">Завітати</button>
            </div>
            <div class="rest">
                <h2 class="text__header">Kinza</h2>
                <img src="/img/kenza.jpg" class="img__rests" alt="">
                <button class="butn">Завітати</button>
            </div>
            <div class="rest">
                <h2 class="text__header">Chin-Chin</h2>
                <img src="/img/chinchin.png" class="img__rests" alt="">
                <button class="butn">Завітати</button>
            </div>
        </div>
    </section>

    <section class="other__rests">
        <div class="other__rests__info">

        </div>
            <div class="other__rests__rests"></div>
                <div class="rest">
                    <h2 class="text__header">McDonalds</h2>
                    <img src="/img/mcdonalds.png" class="img__rests" alt="">
                    <button class="butn">Завітати</button>
                </div>
                <div class="rest">
                    <h2 class="text__header">Chin-Chin</h2>
                    <img src="/img/chinchin.png" class="img__rests" alt="">
                    <button class="butn">Завітати</button>
                </div>
                <div class="rest">
                    <h2 class="text__header">Kinza</h2>
                    <img src="/img/kenza.jpg" class="img__rests" alt="">
                    <button class="butn">Завітати</button>
                </div>
                <div class="rest">
                    <h2 class="text__header">Chin-Chin</h2>
                    <img src="/img/chinchin.png" class="img__rests" alt="">
                    <button class="butn">Завітати</button>
                </div>
            </div>

    </section>

    






    <?php require "blocks/futter.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>