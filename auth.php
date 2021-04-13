<?php
    setcookie('user', 'Да', time() +3600, '/');
    header('Location: /index.php');
?>