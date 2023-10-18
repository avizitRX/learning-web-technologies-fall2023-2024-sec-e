<?php
    session_start();
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirm_password'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

    if($username == '' || $name == '' || $password == '' || $email == '' || $gender == '' || $dob == '') {
        echo "Null Value!";
    }

    $user = ['username' => $username, 'password' => $password, 'name' => $name, 'email' => $email, 'gender' => $gender, 'dob' => $dob];
    $_SESSION['user'] = $user;
    header('location: ../views/login.php');
?>