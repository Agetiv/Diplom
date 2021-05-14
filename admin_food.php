<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php require 'blocks/admin_header.php';?>
    <?php require 'connection.php';?>

    <section style="width: 200px; margin-left: 15px;">
        <h4>Страви:</h4>

        <form action="admin_food.php"  style="display: flex;" method="POST">
                <input type="text" name="search" class="form-control block__element" style="width: 200px;" placeholder="пошук" required>
                <button class="btn btn-lg btn-primary btn-block block__element" style="width: 70px;" type="submit">🔍</button>
        </form>
        <?php
            if(isset($_POST['search']))
            {
                $search = $_POST['search'];
                
                echo 'Результати пошуку:';
                echo'<table class="table">
                <tr>
                    <td class="table">id</td>
                    <td class="table">Назва</td>
                    <td class="table">Ресторан</td>
                    <td class="table">Кухня</td>
                    <td class="table">Тип</td>
                    <td class="table">опис</td>
                    <td class="table">Картинка</td>
                    <td class="table">Ціна</td>
                    <td class="table">Опція</td>
                </tr>';

                $query = "SELECT * FROM food WHERE id like '$search' or name like '$search' or rest like '$search'
                                                        or kitchen like '$search'or type like '$search'or script like '$search'
                                                        or img like '$search'or price like '$search'";
                $result = mysqli_query($link, $query);
                while($row = $result -> fetch_assoc())
                {
                    echo '<tr>
                                <td class="table">'.$row["id"].'</td>
                                <td class="table">'.$row["name"].'</td>
                                <td class="table">'.$row["rest"].'</td>
                                <td class="table">'.$row["kitchen"].'</td>
                                <td class="table">'.$row["type"].'</td>
                                <td class="table">'.$row["script"].'</td>
                                <td class="table">'.$row["img"].'</td>
                                <td class="table">'.$row["price"].'</td>
                                <td class="table"> 
                                <form method="POST" action="admin_couriers.php">
                                    <input type="hidden" name="id_director" value="'.$row["id"].'" />                   
                                    <input type="submit" name="starto" class="butn" value="Видалити" onClick="window.location.reload( true );">
                                </form>
                                </td>
                            </tr>
                            ';
                        
                }
                echo'</table>';
            }
        ?>
    </section>

    <section style="width: 200px; margin-left: 15px;">
    <div>
            <?php require ('connection.php');
    
                if(isset($_POST['username']) && isset($_POST['password']))
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $phone = $_POST ['phone'];

                    check($phone);
                    
                    $query = "INSERT INTO couriers (name, password, phone, active) VALUES ('$username', '$password', '$phone', '1')";
                    $result = mysqli_query($link, $query);

                    if($result)
                    {
                        $smsg="Зареєстровано";
                        header('Location: admin_couriers.php');
                        exit;
                    }
                    else
                    {
                        $fsmsg="Помилка";

                        var_dump($query);
                        echo($query);
                    }
                }
            ?>

            <?php 
                function check($phone)
                {
                    require 'connection.php';
                    $query = "SELECT * FROM couriers WHERE phone = '$phone'";
                    $result = mysqli_query($link, $query);

                    if($result)
                    {
                        $fsmsg="Цей номер зареєстрован";

                    }
                }
            ?>

            <div class="container">
                <form action="" class="form-signin" style="width: 500px;" method="POST">
                    <h2>Додати страву:</h2>
                    <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php } ?>
                    <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>


                    <input type="text" name="name" class="form-control block__element" placeholder="Назва" required>
                    <input type="text" name="rest" class="form-control block__element" placeholder="Ресторан" required>
                    <input type="text" name="kitchen" class="form-control block__element" placeholder="Кухня" required>
                    <input type="text" name="type" class="form-control block__element" placeholder="Тип" required>
                    <input type="text" name="script" class="form-control block__element" placeholder="Опис" required>
                    <input type="text" name="img" class="form-control block__element" placeholder="Картинка" required>
                    <input type="text" name="price" class="form-control block__element" placeholder="Ціна" required>

                    <button class="btn btn-lg btn-primary btn-block block__element" type="submit">Додати</button>
                </form>
            </div>
        </div>
        
        <div>
            <table class="table">
                <tr>
                    <p>Таблиця</p>
                    <td class="table">id</td>
                    <td class="table">Назва</td>
                    <td class="table">Ресторан</td>
                    <td class="table">Кухня</td>
                    <td class="table">Тип</td>
                    <td class="table">опис</td>
                    <td class="table">Картинка</td>
                    <td class="table">Ціна</td>
                    <td class="table">Опція</td>
                </tr>
                
                    <?php
                        $query = "SELECT * FROM food";
                        $result = mysqli_query($link, $query);
                        while($row = $result -> fetch_assoc())
                        {
                            echo '<tr>
                                <td class="table">'.$row["id"].'</td>
                                <td class="table">'.$row["name"].'</td>
                                <td class="table">'.$row["rest"].'</td>
                                <td class="table">'.$row["kitchen"].'</td>
                                <td class="table">'.$row["type"].'</td>
                                <td class="table">'.$row["script"].'</td>
                                <td class="table">'.$row["img"].'</td>
                                <td class="table">'.$row["price"].'</td>
                                <td class="table"> 
                                <form method="POST" action="admin_couriers.php">
                                    <input type="hidden" name="id_director" value="'.$row["id"].'" />                   
                                    <input type="submit" name="starto" class="butn" value="Видалити" onClick="window.location.reload( true );">
                                </form>
                                </td>
                                </tr>
                            ';
                        }
                        echo'</table>';
                    ?>

                    <?php
                        if(isset($_POST['starto']))
                        {
                            $id_director = $_POST['id_director'];
                            $query = "DELETE FROM couriers WHERE id = '$id_director'";
                            $result = mysqli_query($link, $query);
                            header("Refresh:0");
                        }        
                    ?>
        </div>

                            
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>