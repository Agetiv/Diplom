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

<h1 class="mb-5" style="margin-left: 30px;">Ласкаво просимо!)</h1>

<div class="container mt-5">
    <input type="text" neme="text" placeholder="Пошук страви або ресторану за назвою" class="form-control">
</div>

<div class="container mt-5">
    <h3 class="mb-5">Страви дня</h3>
    <div class="d-flex flex-wrap">
        <?php
        for($i = 0; $i < 3; $i++):
        ?>
            <div class="col">
                <div class="card mb-4 shadow-sm">

                    <div class="card-header">
                        <h4 class="my-0 fw-normal"> <?php 
                        $data = file_get_contents("weekfood/name.txt"); //read the file
                        $convert = explode("\r\n", $data); //create array separate by new line
                        echo $convert[$i]. "<br>" ; //write value by index ?></h4>
                    </div>

                    <div class="card-body">
                        <img src="weekfood/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail" alt="">
                        <h1 class="card-title pricing-card-title">
                        <?php 
                        $data = file_get_contents("weekfood/price.txt"); 
                        $convert = explode("\r\n", $data); 
                        echo $convert[$i]; ?>
                         <small class="text-muted">/ oldPrice</small></h1>

                            <ul class="list-unstyled mt-3 mb-4">

                                <li>
                                    <?php 
                                        $data = file_get_contents("weekfood/gram.txt"); 
                                        $convert = explode("\r\n", $data); 
                                        echo $convert[$i]; 
                                    ?>
                                </li>
                                
                                <li> 
                                    <?php 
                                        $data = file_get_contents("weekfood/cal.txt"); 
                                        $convert = explode("\r\n", $data); 
                                        echo $convert[$i]; 
                                    ?>
                                </li>

                                <li>
                                    Оцінка:
                                    <?php 
                                        $data = file_get_contents("weekfood/mark.txt"); 
                                        $convert = explode("\r\n", $data); 
                                        echo $convert[$i]; 
                                    ?>
                                
                                </li>

                                <li>
                                    <?php 
                                        $data = file_get_contents("weekfood/coment.txt"); 
                                        $convert = explode("\r\n", $data); 
                                        echo $convert[$i]; 
                                    ?>
                                </li>

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