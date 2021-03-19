<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "header.php";?>

    <?php require "connection.php";?>

        <!-- Данный php кусок возвращает значение "NULL"
    P.S. подключение к БД работает, таблица rests существует, данные в ней есть, орфографию проверил -->
    <?php
        $rests = mysqli_query($connect, "SELECT * FROM `rests`");

        var_dump($rests);       
    ?>
    
    <!--
        $rests = mysqli_query($connect, "SELECT * FROM `rests`");
        $data = $rests->fetch_all();
        var_dump($data);
        
        данный вариант так же ничего не выводит
    -->



    <?php require "futter.php";?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>