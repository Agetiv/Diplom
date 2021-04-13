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

    <h2>TEST BLOCK 01</h2>

    <section style="min-height: 400px">
        <?php 
          $user = 'root';
          $password = 'root';
          $db = 'ddeliverybase';
          $host = 'localhost';
          $port = 3309;
          
          $link = mysqli_init();
          $success = mysqli_real_connect(
             $link, 
             $host, 
             $user, 
             $password, 
             $db,
             $port
          );

          $query = "SELECT * FROM users";
          $result =mysqli_query($link, $query);
          if($result)
          {
              echo('YRA');
          }
          else echo('error');
        ?>
    
    </section>
    

    
    
</body>
</html>
</body>
</html>