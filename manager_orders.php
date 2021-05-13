<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manager</title>
</head>
<body>
    <?php require 'blocks/manager_header.php';?>
    <?php require 'connection.php';?>

    <section style="width: 200px; margin-left: 15px;">
        <h4>Замовлення:</h4>

        <form action="manager_orders.php"  style="display: flex;" method="POST">
                <input type="text" name="search" class="form-control block__element" style="width: 200px;" placeholder="пошук" required>
                <button class="btn btn-lg btn-primary btn-block block__element" style="width: 70px;" type="submit">🔍</button>
        </form>
        <?php
            if(isset($_POST['search']))
            {
                $search = $_POST['search'];

                echo'<table class="table">
                <tr>
                <td class="table">id</td>
                <td class="table">Користувач</td>
                <td class="table">Адреса</td>
                <td class="table">Номер</td>
                <td class="table">Ресторан</td>
                <td class="table">Замовлення</td>
                <td class="table">Ціна</td>
                <td class="table">Коментар</td>
                <td class="table">Актив</td>
                <td class="table">Курєр</td>
                <td class="table">Виконання</td>
                <td class="table">Час замовлення</td>
                <td class="table">Час виконання</td>
                </tr>';

                $query = "SELECT * FROM orders WHERE id like '$search' or user like '$search' or address like '$search'
                                                                        or phone like '$search' or rest like '$search'
                                                                        or ordertext like '$search' or price like '$search'
                                                                        or coment like '$search' or courier like '$search'
                                                                        or time like '$search'";
                $result = mysqli_query($link, $query);
    
                while($row = $result -> fetch_assoc())
                {
                    echo '<tr>
                            <td class="table">'.$row["id"].'</td>
                            <td class="table">'.$row["user"].'</td>
                            <td class="table">'.$row["address"].'</td>
                            <td class="table">'.$row["phone"].'</td>
                            <td class="table">'.$row["rest"].'</td>
                            <td class="table">'.$row["ordertext"].'</td>
                            <td class="table">'.$row["price"].'</td>
                            <td class="table">'.$row["coment"].'</td>
                            <td class="table">'.$row["active"].'</td>
                            <td class="table">'.$row["courier"].'</td>
                            <td class="table">'.$row["done"].'</td>
                            <td class="table">'.$row["time"].'</td>
                            <td class="table">'.$row["timetodo"].'</td>
                          </tr>
                        ';
                }
                echo'</table>';
            }
        ?>
    </section>

    <section style="width: 200px; margin-left: 15px;">
        

        <table class="table">
            <tr>
                <td class="table">id</td>
                <td class="table">Користувач</td>
                <td class="table">Адреса</td>
                <td class="table">Номер</td>
                <td class="table">Ресторан</td>
                <td class="table">Замовлення</td>
                <td class="table">Ціна</td>
                <td class="table">Коментар</td>
                <td class="table">Актив</td>
                <td class="table">Кур'єр</td>
                <td class="table">Виконання</td>
                <td class="table">Час замовлення</td>
                <td class="table">Час виконання</td>
            </tr>
            
                <?php
                    $query = "SELECT * FROM orders";
                    $result = mysqli_query($link, $query);
                    while($row = $result -> fetch_assoc())
                    {
                        echo '<tr>
                            <td class="table">'.$row["id"].'</td>
                            <td class="table">'.$row["user"].'</td>
                            <td class="table">'.$row["address"].'</td>
                            <td class="table">'.$row["phone"].'</td>
                            <td class="table">'.$row["rest"].'</td>
                            <td class="table">'.$row["ordertext"].'</td>
                            <td class="table">'.$row["price"].'</td>
                            <td class="table">'.$row["coment"].'</td>
                            <td class="table">'.$row["active"].'</td>
                            <td class="table">'.$row["courier"].'</td>
                            <td class="table">'.$row["done"].'</td>
                            <td class="table">'.$row["time"].'</td>
                            <td class="table">'.$row["timetodo"].'</td>
                          </tr>
                        ';
                    }
                ?>
        </table>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>