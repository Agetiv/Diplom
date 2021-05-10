<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Менеджер</title>
</head>
<body>
    <link rel='stylesheet' href='/blocks/style.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <?php require 'blocks/translit.php';?>
    <?php require 'connection.php';?>




    <section class="manager_header">
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
            <img src="/img/icon.png" alt="" width="50" height="50" >
            <p class="h5 my-0 me-md-auto fw-normal"><a class="p-2 text-dark text__border" href="#">DDelivery</a></p>
            <nav class="my-2 my-md-0 me-md-3">
               <!-- <a class="p-2 text-dark text__border" href="#">nothing</a> -->
            </nav>
            <a class="btn btn-outline-primary" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Вийти</a>
        </header> 
    </section>

    <section style="display:flex">
        <div style="margin: 15px;">
            <h5>Користувачі</h5>
            <div class="orders__list">
                <?php 
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($link, $query);
                    while($row = $result ->fetch_assoc())
                    {
                        echo'<p style="text-align:center;"><button class="butn"> '.$row["username"].'</button></p>';
                    }

                ?>
            </div>
        </div>

        <div style="margin: 15px;">
            <h5>Кур'єри</h5>
            <div class="orders__list">
                <?php 
                    $query = "SELECT * FROM couriers";
                    $result = mysqli_query($link, $query);
                    while($row = $result ->fetch_assoc())
                    {
                        echo'<p style="text-align:center;"><button class="butn"> '.$row["name"].'</button></p>';
                    }

                ?>
            </div>
        </div>

        <div style="margin: 15px;">
            <h5>Замовлення</h5>
            <div class="orders__list">
                <?php 
                    $query = "SELECT * FROM orders";
                    $result = mysqli_query($link, $query);
                    while($row = $result ->fetch_assoc())
                    {
                        echo'
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
                                </div>
                                </div>
                            </div>
                        </div>
                            ';
                    }

                ?>
            </div>
        </div>
        <div style="margin: 15px;">
            <h5>Відмова</h5>
            <div class="orders__list">
                <?php 
                    $query = "SELECT * FROM orders WHERE done='2'";
                    $result = mysqli_query($link, $query);
                    while($row = $result ->fetch_assoc())
                    {
                        echo'<p style="text-align:center;"><button class="butn"> '.$row["address"].'</button></p>';
                    }

                ?>
            </div>
        </div>
        

    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>