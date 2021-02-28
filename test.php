<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>DDelivery</title>
</head>
<body>

<?php require "blocks/header.php" ?>

<!-- --------------------------------------------------CONNECTION----------------------------------------------------------- -->
  

<?php
 
 echo "Hello";

  $sql = mysqli_query($success, "SELECT 'id', 'name', 'price' FROM 'weekfood'");
  while ($result = mysqli_fetch_array($sql)) 
  {
    echo "{$result['name']}: {$result['price']} grn<br>";
  }

?>



<!-- --------------------------------------------------CONNECTION----------------------------------------------------------- -->


</body>
</html>