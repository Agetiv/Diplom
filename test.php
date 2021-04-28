<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>TEST BLOCK 01</h2>
    <h5>замовлення</h5>

    <section style="min-height: 400px">
        <?php

        require 'blocks/translit.php';

        $text = "пушкина 20";

        echo $text;

      
        ?>

        <?php
            if(isset($_POST['translate']))
            {
                echo translit($text);
            }
        ?>

        <form method="POST">
            <input type="submit" class="butn" style="margin-left: 30px;" name="translate" value="Замовити">
        </form>

    </section>
    

    
    
</body>
</html>
</body>
</html>