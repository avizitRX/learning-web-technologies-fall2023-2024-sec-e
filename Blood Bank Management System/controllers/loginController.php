<?php 
    function loginControl($username, $password) {
        session_start();
        require_once('../models/usersModel.php');
        $status = login($username, $password);

        if($status == "staff") {
            $_SESSION['flag'] = "true";
            setcookie('staffFlag', 'true', time() + 3600, '/');
            setcookie('user', $username, time() + 3600, '/');
            header("location: ../views/staffPanel.php");
        } else if($status == "donor") {
            $_SESSION['flag'] = "true";
            setcookie('donorFlag', 'true', time() + 3600, '/');
            setcookie('user', $username, time() + 3600, '/');
            header("location: ../views/donorPanel.php");
        } else if($status == "recipient") {
            $_SESSION['flag'] = "true";
            setcookie('recipientFlag', 'true', time() + 3600, '/');
            setcookie('user', $username, time() + 3600, '/');
            header("location: ../views/recipientPanel.php");
        } else {
            return "Incorrect credentials!";
        }
    }
?>