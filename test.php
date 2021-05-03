<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>

    <h2>TEST BLOCK 01</h2>
    <h5>замовлення</h5>

    <section style="min-height: 400px">

    <div class="order">
        <?php  
            session_start();
            $username = $_SESSION['username'];
            $query = "SELECT * FROM orders WHERE user = '$username' and done='0'";
            $result = mysqli_query($link, $query);
            if($result)
            {
                while($row = $result ->fetch_assoc())
                {
                    echo '
                        <p class="text__midle">Адреса: '.$row["address"].'</p>
                        <p class="text__midle">Замовлення: '.$row["ordertext"].'</p>
                        <p class="text__midle">Коли доставимо: '.$row["timetodo"].'</p>
                        <p><button class="butn"> відмовитись</button></p>
                    ';
                }
            }
            else
            {
              echo'sorry';
            }
            
        ?>
    </div>
    </section>
    

    <?php require "blocks/futter.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>
</body>
</html>