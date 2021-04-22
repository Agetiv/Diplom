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

          
          $query ="SELECT name FROM food";
 
          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
          if($result)
          {
              echo "<ul>";
              while ($row = mysqli_fetch_row($result)) {
                  echo "<li>$row[0]</li>";
              }
              echo "</ul>";
               
              mysqli_free_result($result);
          }
            $order;
            $order.="bred";
            echo $order;
            

        ?>
    
    </section>
    

    
    
</body>
</html>
</body>
</html>