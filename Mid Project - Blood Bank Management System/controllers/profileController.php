<?php
    function profileUpdate($name, $address, $email, $mobileNumber) {
        session_start();

        // $username = $_REQUEST['username'];
        // $password = $_REQUEST['password'];
        // $name = $_REQUEST['name'];
        // $address = $_REQUEST['address'];
        // $email = $_REQUEST['email'];
        // $mobileNumber = $_REQUEST['mobile_number'];
        
        // $user = ['username' => $username, 'password' => $password, 'name' => $name, 'address' => $address, 'email' => $email, 'mobileNumber' => $mobileNumber, 'profilePicture' => $profilePicture];
        // $_SESSION['user'] = $user;

        require_once('../models/userModel.php');
        profileUpdateModel($name, $address, $email, $mobileNumber);
    }
?>