<?php
    session_start();
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

    $user = ['name' => $name, 'email' => $email, 'gender' => $gender, 'dob' => $dob];
    $_SESSION['user'] = $user;
    header('location: ../views/dashboard.php');
?>