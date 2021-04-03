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
            <form action="" class="form-signin" method="POST">
                <h2>Login</h2>

                <input type="text" name="username" class="form-control block__element" placeholder="username" required>
                <input type="password" name="password" class="form-control block__element" placeholder="password" required>
                <button class="btn btn-lg btn-primary btn-block block__element" type="submit">login</button> <br>
                <h5>or</h5>
                <a class="btn btn-primary btn-block block__element" href="registration.php">registration</a>

            </form>
        </div>

        <?php
            session_start();
            require ('connection.php');
            if(isset($_POST['username']) && isset($_POST['password']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = "SELECT * FROM users WHERE username='$username' and password='password'";
                $result = mysqli_query($connect, $query) or die( mysqli_error($connect));
                $count = mysqli_num_rows($result);
    
                if($count ==1)
                {
                    $_SESSION['username'] = $username;
                }
                else 
                {
                    $fsmsg = "Error";
                }
            }
             
            
            if(isset($_SESSION['username']))
            {
                $username = $_SESSION['username'];
                echo "Вітаємо, " . $username . "!";
                echo "<a class='btn btn-primary btn-block block__element' href='registration.php'>registration</a>";
            }
           
        ?>


        <?php require "blocks/futter.php"; ?>

    </body>
</html>