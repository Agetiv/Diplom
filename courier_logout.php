<?php
    session_start();
    $_SESSION['courier']=NULL;
    
    header('Location: courier_login.php');

    exit;
?>