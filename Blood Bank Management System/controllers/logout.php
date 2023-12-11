<?php 
    session_start();
    //session_destroy();
    //session_unset($_SESSION['flag']);
    // unset($_SESSION['flag']);
    setcookie('flag', 'true', time() - 10, '/');
    setcookie('user', $username, time() - 10, '/');
    header('location: ../views/login.php');
?>