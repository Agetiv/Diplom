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
    <h3 class="mb-5">Страви дня</h3>
    <div class="d-flex flex-wrap">
        <?php
        for($i = 0; $i < 3; $i++):
        ?>
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal">Назва страви</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail" alt="">
                        <h1 class="card-title pricing-card-title">$11.99 <small class="text-muted">/ 15.00</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>228 грам</li>
                            <li>1337 kkol</li>
                            <li>Оцінка: 5</li>
                            <li>смакотища, атвічаю</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Замовити</button>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php require "blocks/footer.php" ?>

</body>
</html>