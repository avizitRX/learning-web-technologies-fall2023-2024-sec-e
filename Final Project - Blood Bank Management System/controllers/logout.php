<?php 
    session_start();
    //session_destroy();
    //session_unset($_SESSION['flag']);
    // unset($_SESSION['flag']);
    unset($_SESSION['user']);
    unset($_SESSION['flag']);
    setcookie('flag', 'true', time() - 10, '/');
    setcookie('staffFlag', 'true', time() - 10, '/');
    setcookie('donorFlag', 'true', time() - 10, '/');
    setcookie('recipientFlag', 'true', time() - 10, '/');
    setcookie('user', $username, time() - 10, '/');
    header('location: ../views/login.php');
?>