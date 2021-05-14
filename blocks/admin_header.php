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
    <link rel='stylesheet' href='/blocks/style.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>

    <?php require "connection.php";?>

    <section class="header__pc">
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <img src="/img/icon.png" alt="" width="50" height="50" >
        <p class="h5 my-0 me-md-auto fw-normal"><a class="p-2 text-dark text__border" href="/index.php">DDelivery</a></p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark text__border" href="/admin_couriers.php">Кур'єи</a>
            <a class="p-2 text-dark text__border" href="/admin_food.php">Страви</a>
            <a class="p-2 text-dark text__border" href="/admin_rest.php">Ресторани </a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Вийти</a>

        </header>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>