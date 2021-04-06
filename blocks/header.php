<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel='stylesheet' href='/blocks/style.css'>
    <?php require "connection.php";?>

    <section class="header__mobile">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="index.php" ><img src="img/icon.png" alt="logo" class="header_logo_1" style="width: 50px;"></a>
                <p2>DDelivery</p2>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="restourants.php">Ресторани</a>
                        <a class="nav-link" href="#">щось новеньке</a>
                        <a class="nav-link" href="help.php">допомога</a>
                        <a class="nav-link" href="#">кошик</a>
                    </div>
                    <div class="navbar-nav_1">
                <a class="nav-link" href="login.php">Увійти</a>
              </div>
                </div>
            </div>
        </nav>
    </section>

    <section class="header__pc">
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <img src="/img/icon.png" alt="" width="50" height="50" >
        <p class="h5 my-0 me-md-auto fw-normal"><a class="p-2 text-dark text__border" href="/index.php">DDelivery</a></p>
        <nav class="my-2 my-md-0 me-md-3">
            <a class="p-2 text-dark text__border" href="/restourants.php">ресторани</a>
            <a class="p-2 text-dark text__border" href="#">щось новеньке</a>
            <a class="p-2 text-dark text__border" href="/help.php">допомога</a>
            <a class="p-2 text-dark text__border" href="#">кошик</a>
        </nav>
        <a class="btn btn-outline-primary" href="login.php">Увійти</a>
        <a class="btn btn-outline-primary" href="courier.php">Test</a>

        </header>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
</html>