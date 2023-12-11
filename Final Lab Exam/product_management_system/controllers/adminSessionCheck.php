<?php 
    session_start();
    if (!isset($_COOKIE['adminFlag'])) {
        header('location: login.php');
    }
?>