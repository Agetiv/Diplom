<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Особистий кабінет</title>
    <?php header('refresh: 10'); ?>

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
        <a class='btn btn-primary btn-block' style="width:200px;" href='change_info.php'>редагувати</a>

    </section>

    <a class='btn btn-primary btn-block' style="margin:10px; width:200px;" href='logout.php'>Вийти</a>


    <h4>3амовлення:</h4>

    <section class="last__orders" style="display: flex;">

            <?php # отмена заказа
                if( isset( $_POST['dropOrder'] ) )
                {
                    $username = $_SESSION['username'];
                    $query = "UPDATE orders SET done = '2' WHERE user = '$username' and done='0';";
                    $result = mysqli_query($link, $query);
                    ?><script type="text/javascript">
                    alert("Очікуйте зв'язку з оператором");
                    location="cabinet.php";
                    </script><?php
                }

            ?>

            <?php  #вывод заказов
                $username = $_SESSION['username'];
                $query = "SELECT * FROM orders WHERE user = '$username' and done='0'";
                $result = mysqli_query($link, $query);

                while($row = $result ->fetch_assoc())
                {
                    echo '
                    <div class="order">
                    <p class="text__midle">номер замовлення: '.$row["id"].'</p>
                    <p class="text__midle">-------------------------</p>
                        <p class="text__midle">Адреса: '.$row["address"].'</p>
                        <p class="text__midle">Замовлення: '.$row["ordertext"].'</p>
                        <p class="text__midle">Коли доставимо: '.$row["timetodo"].'</p>
                        <div >
                            <form action="" class="" method="POST">
                                <input type="submit" class="butn" name="dropOrder" value="Відмовитись">
                            </form>
                        </div>
                    </div>
                        ';
                }            
            ?>


    </section>




    <?php require "blocks/futter.php";?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>
</html>