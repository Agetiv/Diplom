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

    <h1 class="mb-5" style="margin-left: 30px;">Ласкаво просимо!)</h1>

    <div class="container mt-5">
        <input type="text" neme="text" placeholder="Пошук страви або ресторану за назвою" class="form-control">
    </div>

    <h2 style="margin-left: 30px; margin-top:20px;">Наші партнери:</h2>

    <section class="rests">
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
            <h2 class="text__header">Kenza</h2>
            <img src="/img/kenza.jpg" class="img__rests" alt="">
            <button class="butn">Завітати</button>
        </div>
        <div class="rest">
            <h2 class="text__header">this.Bao</h2>
            <img src="/img/bao.png" class="img__rests" alt="">
            <button class="butn">Завітати</button>
        </div>

        
        

    </section>

    






    <?php require "blocks/futter.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>