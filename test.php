<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "blocks/header.php";?>

    <h2>TEST BLOCK 01</h2>

    <section style="min-height: 400px">
        <?php 
            $user = 'root';
            $password = 'root';
            $db = 'ddeliverybase';
            $host = 'localhost';
            $port = 3309;

            $link = mysqli_connect('localhost','root','root','ddeliverybase');

            if(mysqli_connect_errno())
            {
                echo('Ошибка подключения ('.mysqli_connect_errno().'): ' .mysqli_connect_error());
                exit();
            }



        ?>
    
    </section>
    

    
    
        <?php require "blocks/futter.php";?>
</body>
</html>
</body>
</html>