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
        <h4>Кур'єри:</h4>

        <form action="admin_couriers.php"  style="display: flex;" method="POST">
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
                    <td class="table">Імя</td>
                    <td class="table">Номер</td>
                    <td class="table">Актив</td>
                    <td class="table">Пароль</td>
                    <td class="table">Опція</td>
                </tr>';

                $query = "SELECT * FROM couriers WHERE id like '$search' or name like '$search' or phone like '$search'";
                $result = mysqli_query($link, $query);
                while($row = $result -> fetch_assoc())
                {
                    echo '
                        <tr>
                        <td class="table">'.$row["id"].'</td>
                        <td class="table">'.$row["name"].'</td>
                        <td class="table">'.$row["phone"].'</td>
                        <td class="table">'.$row["active"].'</td>
                        <td class="table">'.$row["password"].'</td>
                        <td class="table"> 
                        <form method="POST" action="admin_couriers.php.php">
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

    <section style="width: 200px; margin-left: 15px; display:flex">
        <div>
            <table class="table">
                <tr>
                    <p>Таблиця</p>
                    <td class="table">id</td>
                    <td class="table">Ім'я</td>
                    <td class="table">Номер</td>
                    <td class="table">актив</td>
                    <td class="table">Пароль</td>
                    <td class="table">Опція</td>
                </tr>
                
                    <?php
                        $query = "SELECT * FROM couriers";
                        $result = mysqli_query($link, $query);
                        while($row = $result -> fetch_assoc())
                        {
                            echo '<tr>
                                <td class="table">'.$row["id"].'</td>
                                <td class="table">'.$row["name"].'</td>
                                <td class="table">'.$row["phone"].'</td>
                                <td class="table">'.$row["active"].'</td>
                                <td class="table">'.$row["password"].'</td>
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
                <form action="" class="form-signin" method="POST">
                    <h2>Зареєструвати кур'єра</h2>
                    <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php } ?>
                    <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>


                    <input type="text" name="username" class="form-control block__element" placeholder="ім'я" required>
                    <input type="text" name="phone" class="form-control block__element" placeholder="телоефон" required>
                    <input type="password" name="password" class="form-control block__element" placeholder="пароль" required>
                    <button class="btn btn-lg btn-primary btn-block block__element" type="submit">Зареєструвати</button>
                </form>
            </div>
        </div>                    
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>