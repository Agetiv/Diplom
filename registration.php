<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel='stylesheet' href='/blocks/style.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
</head>
<body>

    <?php require "blocks/header.php"; ?>

    <?php require ('connection.php');
    
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST ['phone'];

            check($phone);
            
            $query = "INSERT INTO users (username, email, password, phone) VALUES ('$username', '$email', '$password', '$phone')";
            $result = mysqli_query($link, $query);

            if($result)
            {
                $smsg="Вітаємо, Ви зареєстровані!";
            }
            else
            {
                $fsmsg="Error";

                var_dump($query);
                echo($query);
            }
        }
    ?>

    <?php 
        function check($phone)
        {
            require 'connection.php';
            $query = "SELECT * FROM users WHERE phone = '$phone'";
            $result = mysqli_query($link, $query);

            if($result)
            {
                $fsmsg="Цей номер зареєстрован";

            }
        }
    ?>



    <div class="container">
        <form action="" class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php } ?>
            <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>


            <input type="text" name="username" class="form-control block__element" placeholder="username" required>
            <input type="text" name="phone" class="form-control block__element" placeholder="phone" required>
            <input type="email" name="email" class="form-control block__element" placeholder="email" required>
            <input type="password" name="password" class="form-control block__element" placeholder="password" required>
            <button class="btn btn-lg btn-primary btn-block block__element" type="submit">Registration</button>
        </form>
    </div>


    <?php require "blocks/futter.php"; ?>

</body>
</html>