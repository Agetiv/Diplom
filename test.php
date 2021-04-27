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
    <h5>замовлення</h5>

    <section style="min-height: 00px">
    </section>
    <?php
        require 'connection.php';

        $query ="SELECT * FROM orders";
        $result=mysqli_query($link, $query);
        while($row = $result ->fetch_assoc())
        {
            echo '
                <li>'.$row['address'].'</li>
            ';
        }
    
    ?>

    
    
</body>
</html>
</body>
</html>