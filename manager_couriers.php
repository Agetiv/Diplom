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
        <h4>Кур'єри:</h4>

        <form action="manager_couriers.php"  style="display: flex;" method="POST">
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
                    <td class="table">Імя</td>
                    <td class="table">Номер</td>
                    <td class="table">Актив</td>
                </tr>';

                $query = "SELECT * FROM couriers WHERE id like '$search' or name like '$search' or phone like '$search'";
                $result = mysqli_query($link, $query);
                while($row = $result -> fetch_assoc())
                {
                    echo '
                        <tr>
                        <td class="table">'.$row["id"].'</td>
                        <td class="table">'.$row["name"].'</td>
                        <td class="table">'.$row["phone"].'</td>
                        <td class="table">'.$row["active"].'</td>
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
                <p>Таблиця</p>
                <td class="table">id</td>
                <td class="table">Ім'я</td>
                <td class="table">Номер</td>
                <td class="table">актив</td>
            </tr>
                <?php
                    $query = "SELECT * FROM couriers";
                    $result = mysqli_query($link, $query);
                    while($row = $result -> fetch_assoc())
                    {
                        echo '<tr>
                            <td class="table">'.$row["id"].'</td>
                            <td class="table">'.$row["name"].'</td>
                            <td class="table">'.$row["phone"].'</td>
                            <td class="table">'.$row["active"].'</td>
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