<?php
    function register($role, $username, $password, $password2, $name, $bloodGroup, $address, $email, $mobileNumber) {
        session_start();

        // $username = $_REQUEST['username'];
        // $password = $_REQUEST['password'];
        // $password2 = $_REQUEST['password2'];
        // $name = $_REQUEST['name'];
        // $address = $_REQUEST['address'];
        // $email = $_REQUEST['email'];
        // $mobileNumber = $_REQUEST['mobile_number'];

        if ($role == "" || $username == "" || $password == "" || $password2 == "" || $name == "" || $bloodGroup == "" || $address == "" || $email == "" || $mobileNumber == "") {
            return "Please fill up all the inputs!";
        } else if($password != $password2) {
            return "Password didn't match!";
        } else {
            // $user = ['username' => $username, 'password' => $password, 'name' => $name, 'bloodGroup' => $bloodGroup, 'address' => $address, 'email' => $email, 'mobileNumber' => $mobileNumber];
            // $_SESSION['user'] = $user;

            require_once('../models/usersModel.php');
            $status = registration($role, $username, $password, $name, $bloodGroup, $address, $email, $mobileNumber);
            return $status;
        } 
    }
?>