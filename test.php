<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "blocks/header.php"; ?>

    <h2>TEST BLOCK 01</h2>
    <h5>замовлення</h5>

    <section style="min-height: 400px">
    
        <script type="text/javascript">

        var userName2 = 'Дмитрий';

        </script>

        <?php
        if (isset($_GET['u_name']))
        {
            $id = $_GET['u_name'];
            echo $id;
        }

        ?>
        <?php
           if(isset($_POST['doneit']))
           {
               if($id!='')
               {
                $query = "UPDATE orders SET done = '1' WHERE id = '$id'";
                $result = mysqli_query($link, $query);
                ?><script type="text/javascript">
                alert("Добре");
                </script><?php
               }
               else
               {
                ?><script type="text/javascript">
                alert("error");
                </script><?php
               }
           
           }  
        ?>
        
    </section>
    

    <?php require "blocks/futter.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>
</body>
</html>