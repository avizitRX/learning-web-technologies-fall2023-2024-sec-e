<?php 
    session_start();
    if (!isset($_COOKIE['employeeFlag'])) {
        header('location: login.php');
    }
?>
