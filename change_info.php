<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редагування</title>
</head>
<body>

    <?php require 'blocks/header.php';?>
    <?php session_start()?>
    <h2>Змінення данних:</h2>
    
    <section style="margin-left: 15px;">
        

        <h6>Стара адресса: <?php echo $_SESSION['address']?></h6> <br>
        <h6>Нова адресса:</h6>
        
        <?php session_start();?>

        <?php       
            if(isset($_POST['change']))
            {
                $user_id = $_SESSION['user_id'];
                $newAddress = $_POST['address'];


                $query = "UPDATE users SET address = '$newAddress' WHERE id = '$user_id'";
                $result = mysqli_query($link, $query);
                if($result)
                {
                    ?><script type="text/javascript">
                        alert("Ви змінили адрессу!");
                        location="cabinet.php";
                    </script><?php
            }            
            }
            
        ?>

        <div>
            <form action="" class="change" method="POST">
                <input type="text" name="address" class="form-control block__element" style="width: auto;" placeholder="address" required> 
                <input type="submit" class="butn" name="change" value="змінити">
            </form>
        </div>
    </section>


    <?php require 'blocks/futter.php';?>
</body>
</html>