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
            $port = 8889;

            $link = mysqli_init();
            $success = mysqli_real_connect(
            $link, 
            $host, 
            $user, 
            $password, 
            $db,
            $port
            );

            if(! $success){echo "error";}
            else {echo "connected";}


            $query1 = mysqli_query($success, "SELECT * FROM users");

            $myrow = mysqli_fetch_array($query1);

            while($row=mysqli_fetch_array($query1))
            {
            echo $row['id'],' ', $row['name'],' ', $row['email'],' ', $row['password'],' ', $row['active']. "<br />";
            }


        ?>
    
    </section>
    

    
    
        <?php require "blocks/futter.php";?>
</body>
</html>
</body>
</html>