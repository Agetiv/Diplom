<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php require 'blocks/admin_header.php';?>
    <?php require 'connection.php';?>

    <section style="width: 200px; margin-left: 15px;">
        <h4>Ресторани:</h4>

        <form action="admin_rests.php"  style="display: flex;" method="POST">
                <input type="text" name="search" class="form-control block__element" style="width: 200px;" placeholder="пошук" required>
                <button class="btn btn-lg btn-primary btn-block block__element" style="width: 70px;" type="submit">🔍</button>
        </form>
        <?php
            if(isset($_POST['search']))
            {
                $search = $_POST['search'];

                echo 'Результати пошуку:';
                echo'<table class="table">
                <tr>
                    <td class="table">id</td>
                    <td class="table">Назва</td>
                    <td class="table">Кухня</td>
                    <td class="table">Картинка</td>
                    <td class="table">Опис</td>
                    <td class="table">Опція</td>
                </tr>';

                $query = "SELECT * FROM rests WHERE id like '$search' or name like '$search' or kitchen like '$search'";
                $result = mysqli_query($link, $query);
                while($row = $result -> fetch_assoc())
                {
                    echo '
                        <tr>
                        <td class="table">'.$row["id"].'</td>
                        <td class="table">'.$row["name"].'</td>
                        <td class="table">'.$row["kitchen"].'</td>
                        <td class="table">'.$row["img"].'</td>
                        <td class="table">'.$row["script"].'</td>
                        <td class="table"> 
                                <form method="POST" action="admin_rests.php">
                                    <input type="hidden" name="id_director" value="'.$row["id"].'" />                   
                                    <input type="submit" name="starto" class="butn" value="Видалити" onClick="window.location.reload( true );">
                                </form>
                                </td>
                        </tr>
                    ';
                }
                echo'</table>';
            }
        ?>
    </section>

    <section style="width: 200px; margin-left: 15px; display:flex;">
        
        <div>
            <table class="table">
                <p>Таблиця</p>
                <tr>
                    <td class="table">id</td>
                    <td class="table">Назва</td>
                    <td class="table">Кухня</td>
                    <td class="table">Картинка</td>
                    <td class="table">Опис</td>
                    <td class="table">Опція</td>
                </tr>
                
                    <?php
                        $query = "SELECT * FROM rests";
                        $result = mysqli_query($link, $query);
                        while($row = $result -> fetch_assoc())
                        {
                            echo '<tr>
                            <td class="table">'.$row["id"].'</td>
                            <td class="table">'.$row["name"].'</td>
                            <td class="table">'.$row["kitchen"].'</td>
                            <td class="table">'.$row["img"].'</td>
                            <td class="table">'.$row["script"].'</td>
                                <td class="table"> 
                                    <form method="POST" action="admin_rests.php">
                                        <input type="hidden" name="id_director" value="'.$row["id"].'" />                   
                                        <input type="submit" name="starto" class="butn" value="Видалити" onClick="window.location.reload( true );">
                                    </form>
                                    </td>
                                </tr>
                            ';
                        }
                    ?>
            </table>
                        <?php
                            if(isset($_POST['starto']))
                            {
                                $id_director = $_POST['id_director'];
                                $query = "DELETE FROM rests WHERE id = '$id_director'";
                                $result = mysqli_query($link, $query);
                                header("Refresh:0");
                            }        
                        ?>
        </div>

        <div>
                <?php require ('connection.php');
                
                if(isset($_POST['name']) && isset($_POST['img']))
                {
                    $name = $_POST['name'];
                    $kitchen = $_POST['kitchen'];
                    $img = $_POST['img'];
                    $script = $_POST ['script'];

                    
                    $query = "INSERT INTO rests (name, kitchen, img, script) VALUES ('$name', '$kitchen', '$img', '$script')";
                    $result = mysqli_query($link, $query);

                    if($result)
                    {
                        $smsg="Вітаємо, Ви додали ресторан!";
                        header('Location: admin_rests.php');
                        exit;
                    }
                    else
                    {
                        $fsmsg="Error";

                        var_dump($query);
                        echo($query);
                    }
                }
            ?>

            <div class="container">
                <form action="" class="form-signin" method="POST">
                    <h2>Додати ресторан</h2>
                    <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php } ?>
                    <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>


                    <input type="text" name="name" class="form-control block__element" placeholder="Назва" required>
                    <input type="text" name="kitchen" class="form-control block__element" placeholder="Кухня" required>
                    <input type="text" name="img" class="form-control block__element" placeholder="Картинка" required>
                    <input type="text" name="script" class="form-control block__element" placeholder="Опис" required>
                    <button class="btn btn-lg btn-primary btn-block block__element" type="submit">Додати</button>
                </form>
            </div>  
        </div>
        
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>