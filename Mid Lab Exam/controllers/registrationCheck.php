<?php
    require_once('../model/userModel.php');

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirm_password'];
    $name = $_REQUEST['name'];
    $userType = $_REQUEST['user-type'];

    if($id == '' || $name == '' || $password == '' || $confirmPassword == '' || $userType == '') {
        echo "Null Value!";
    }

    $user = ['id' => $id, 'password' => $password, 'confirmPassword' => $confirmPassword, 'userType' => $userType];
    $_SESSION['user'] = $user;

    signup($id, $password, $name, $userType);
?>