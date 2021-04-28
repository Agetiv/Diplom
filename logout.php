<?php
    session_start();
    session_destroy('username');
    
    header('Location: index.php');

    exit;
?>