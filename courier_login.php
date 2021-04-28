<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel='stylesheet' href='/blocks/style.css'>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Вхід</title>
    </head>
    <body>

        <?php require "blocks/header.php"; ?>

        <div class="container">
            <form action="courier_login.php" class="form-signin" method="POST">
                <h2>Login</h2>

                <input type="text" name="courier" class="form-control block__element" placeholder="courier" required>
                <input type="password" name="password" class="form-control block__element" placeholder="password" required>
                <button class="btn btn-lg btn-primary btn-block block__element" type="submit">login</button> <br>

            </form>
        </div>

        <?php
            session_start();
            require ('connection.php');
            print_r($_POST);
            
            if(isset($_POST['courier']) && isset($_POST['password']))
            {
                $courier = $_POST['courier'];
                $password = $_POST['password'];

                $query = "SELECT id FROM couriers WHERE name='$courier' and password='$password'";
                $result = mysqli_query($link, $query);
                if(!$result)
                {
                    echo('Ошибка подключения ('.mysqli_connect_errno().'): ' .mysqli_connect_error());
                    echo($query);
                    exit();
                    
                }
                $count = mysqli_num_rows($result);
                               
                if($count ==1)
                {
                    $_SESSION['courier'] = $courier;

                    while ($row = mysqli_fetch_row($result)) 
                    {
                    $_SESSION['courier_id']=$row[0];
                    } 

                }
                else 
                {
                    $fsmsg = "Error";
                }
            }
             
            
            if(isset($_SESSION['courier']))
            {
                header('Location: courier.php');
                exit;
            }
        ?>


        <?php require "blocks/futter.php"; ?>

    </body>
</html>