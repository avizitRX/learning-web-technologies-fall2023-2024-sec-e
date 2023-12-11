<?php 
    session_start();
    setcookie('flag', 'true', time() - 10, '/');
    setcookie('adminFlag', 'true', time() - 10, '/');
    setcookie('sellerFlag', 'true', time() - 10, '/');
    setcookie('buyerFlag', 'true', time() - 10, '/');
    header('location: ../views/login.php');
?>