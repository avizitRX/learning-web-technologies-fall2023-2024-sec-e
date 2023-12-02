<?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    require_once('../models/adminModel.php');
    $status = login($username, $password);

    if($status) {
        $_SESSION['flag'] = "true";
        setcookie('flag', 'true', time() + 3600, '/');
        echo 'true';
    } else {
        echo 'Wrong Credentials!';
    }
?>