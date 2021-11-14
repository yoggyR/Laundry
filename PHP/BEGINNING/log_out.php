<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie('login', $dataUser['email'], time() - 120, '/');
    header("Location: log_in.php");
?>