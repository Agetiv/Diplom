<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Особистий кабінет</title>
</head>
<body>
    <?php require "blocks/header.php";?>

    <?php session_start();?>
    <?php $user_id = $_SESSION['user_id'];?>
    <section class="user__info">
        <h2>Вітаємо!</h2>
        <?php
            $query ="SELECT * FROM users WHERE id='$user_id'";
            $result=mysqli_query($link, $query);
            while($row = $result ->fetch_assoc())
            {
                echo '
                <p class="text__midle">Користувач: '.$row["username"].'</p><br>
                <p class="text__midle">Email: '.$row["email"].'</p><br>
                <p class="text__midle">Телефон: '.$row["phone"].'</p><br>
                <p class="text__midle">Адреса: '.$row["address"].'</p><br>
                ';
                $_SESSION['phone'] = $row["phone"];
                $_SESSION['address'] = $row["address"];
                $_SESSION['email'] = $row["email"];

            }
        ?>
        <p class="text__midle"></p>
        <a class='btn btn-primary btn-block' href='change_info.php'>редагувати</a>

    </section>

    <a class='btn btn-primary btn-block block__element' href='logout.php'>Вийти</a>

    <section class="last__orders">
        <h4>Останні замовлення:</h4>
        <p class="text__mobile" style="text-align: center;">Інформація відсутня</p>

    </section>




    <?php require "blocks/futter.php";?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>
</html>