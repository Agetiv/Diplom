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
<div class="container mt-5">
<h3>Допомога</h3>
<br>
<form action="check.php" method="post">
<input type="mail" neme="mail" placeholder="Введіть свій Email" class="form-control"><br>
<textarea name="Повідомлення" placeholder="Опишіть проблему" class="form-control"></textarea><br>
<button type="submit" name="send" class="btn btn-success">Відправити</button>
</form>
</div>

<?php require "blocks/footer.php" ?>

</body>
</html>