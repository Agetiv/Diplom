<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Особистий кабінет</title>
</head>
<body>
    <?php require "blocks/courier_header.php";?>

    <?php session_start();?>
    <?php $user_id = $_SESSION['user_id'];?>
    <section class="user__info">
        <h2>Вітаємо!</h2>
        <p class="text__midle">Кур'єр: <?php echo $_SESSION['courier'];?> </p><br>
        <?php
            $courier = $_SESSION['courier'];
            $query ="SELECT * FROM couriers WHERE name='$courier'";
            $result=mysqli_query($link, $query);
            while($row = $result ->fetch_assoc())
            {
                echo '
                <p class="text__midle">Телефон: '.$row["phone"].'</p><br>
                ';
            }
        ?>       
    </section>

    <a class='btn btn-primary btn-block block__element' href='courier_logout.php'>Вийти</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>
</html>