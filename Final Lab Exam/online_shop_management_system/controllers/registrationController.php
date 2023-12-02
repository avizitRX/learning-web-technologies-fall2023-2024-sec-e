<?php
    session_start();
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    require_once('../models/adminModel.php');
    $result = register($username, $password, $email);
    echo $result;
?>