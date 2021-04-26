<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редагування</title>
</head>
<body>
    <?php require 'blocks/header.php';?>

    <h2>Змінення данних:</h2>

    <h6>Будьласка, вказуйте корректні данні!</h6> <br>
    
    <?php session_start();?>

    <?php       
        $user_id = $_SESSION['user_id'];

        $query="SELECT * FROM users WHERE id='$user_id'";
        $result = mysqli_query($link, $query);
        for($i;$i < $num_rows;$i++)
        {

        }
    ?>

    <section class="change">
            <input type="text" name="phone" class="form-control block__element" style="width: auto;" placeholder="phone" required>
            <input type="email" name="email" class="form-control block__element" style="width: auto;" placeholder="email" required>
            <input type="password" name="password" class="form-control block__element" style="width: auto;" placeholder="password" required>
            <input type="text" name="address" class="form-control block__element" style="width: auto;" placeholder="address" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block block__element" style="width: auto;" type="submit">змінити</button>
    </section>



    <?php require 'blocks/futter.php';?>
</body>
</html>