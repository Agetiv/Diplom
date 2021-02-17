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

<div class="container mt-5" >
<input type="text" neme="text" placeholder="Пошук ресторану за назвою" class="form-control"><br>
</div>

<div class="col">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 fw-normal">Chin-Chin</h4>
        </div>

        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <img src="img/chinchin.png" class="img-thumbnail" alt="" style="width: 300px; height: 250px;">
                    </td>
                    <td>
                        <h1 class="card-title pricing-card-title" style="margin-left: 30px;">Ресторан японської кухні <br><small class="text-muted"> та смачної лапши</small></h1>
                    </td>
                </tr>
            </table>

            <button type="button" class="w-100 btn btn-lg btn-outline-primary">перейти</button>           
        </div>
    </div>
</div>

<div class="col">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 fw-normal">MCdonalds</h4>
        </div>

        <div class="card-body">
            <table>
                <tr>
                    <td>
                        <img src="img/mcdonalds.png" class="img-thumbnail" alt="" style="width: 300px; height: 250px;">
                    </td>
                    <td>
                        <h1 class="card-title pricing-card-title" style="margin-left: 30px;">Ресторан швидкої їжі <br><small class="text-muted"> олюблені бургери</small></h1>
                    </td>
                </tr>
            </table>

            <button type="button" class="w-100 btn btn-lg btn-outline-primary">перейти</button>           
        </div>
    </div>
</div>


<?php require "blocks/footer.php" ?>

</body>
</html>