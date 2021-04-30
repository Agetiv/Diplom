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

    <section class="courier__header shadow-sm">
        <img src="/img/icon.png" alt="" width="50" height="50" >
        <p href="/index.php" class="courier__headtext">DDelivery</a></p>
        
        <div class="dropdown" style="margin-left:auto; padding: 10px">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Ще
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="courier_cabinet.php">Кабінет</a></li>
                <li><a class="dropdown-item" href="courier_order.php">Активне замовлення</a></li>
                <li><a class="dropdown-item" href="courier.php">Список замовлень</a></li>
            </ul>
        </div>

    </section>
</body>
</html>