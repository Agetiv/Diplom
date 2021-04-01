<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier</title>
</head>
<body>
    <link rel='stylesheet' href='/blocks/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <section class="courier__header">
        <img src="/img/icon.png" alt="" width="50" height="50" >
        <p href="/index.php" class="courier__headtext">DDelivery</a></p>

        <div class="dropdown" style="margin: 10px 10px 0px 160px;">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Ще
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Кабінет</a></li>
                <li><a class="dropdown-item" href="#">Активне замовлення</a></li>
                <li><a class="dropdown-item" href="#"></a>Список замовлень</li>
            </ul>
        </div>

    </section>

    <section class="orders__list">
        <button class="butn" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#food_settings">Вул. Пироговського</button>


        <div class="modal fade" id="food_settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Вул. Пироговського 20</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>McDonalds</p>
                        <p>БігМак меню х1</p>
                        <p>------------</p>
                        <p>Додаткова інформація:</p>
                        <p>Кв. 51</p>
                        <p>Коментар:</p>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Скасувати</button>
                    <button type="button" class="btn btn-primary">Підтвердити</button>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="courier__take">
        <button class="butn courier__butn">Деталі</button>
    </section> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>