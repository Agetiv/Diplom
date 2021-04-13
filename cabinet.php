<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Особистий кабінет</title>
</head>
<body>
    <?php require "blocks/header.php";?>

    <section class="user__info">
        <h2>Вітаємо!</h2>
        <p class="text__midle">Ім'я: <?php echo $username;?> </p><br>
        <p class="text__midle">Номер: <?php $phone;?> </p><br>
        <p class="text__midle">Email: <?php $email;?> </p><br>
        <p class="text__midle">Адреса: <?php $address;?> </p><br>
    </section>

    <a class='btn btn-primary btn-block block__element' href='logout.php'>logout</a>

    <section class="last__orders">
        <h4>Останні замовлення:</h4>
        <p class="text__mobile" style="text-align: center;">Інформація відсутня</p>

    </section>




    <?php require "blocks/futter.php";?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>
</html>