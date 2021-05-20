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

    <div class="container mt-5" style="display: flex;">

        <form action="" method="POST">
            <div class="container mt-5" style="display: flex;">
                <input type="text" name="text" placeholder="Пошук страви за назвою" style="width:1300px" class="form-control">
                <button type="submit" class="btn" name="search">🔍</button>
            </div>
        </form>
        <?php
            if(isset($_POST['search']))
            {
                $search_name = $_POST['text'];

                $query ="SELECT * FROM food WHERE name = '$search_name'";
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
            }
        ?>
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
            <h2 class="text__header">Kinza</h2>
            <img src="/img/kenza.jpg" class="img__rests" alt="">
            <button class="butn" onclick="document.location='kinza.php'">Завітати</button>
        </div>
        <div class="rest">
            <h2 class="text__header">Vlavashe</h2>
            <img src="/img/vlavashe.jpg" class="img__rests" alt="">
            <button class="butn"onclick="document.location='vlavashe.php'">Завітати</button>
        </div>    
    </section>

    <?php require "blocks/futter.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>