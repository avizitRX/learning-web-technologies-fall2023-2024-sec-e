<?php 
    function loginControl($role, $username, $password) {
        session_start();

        if ($role === "" | $username === "" | $password === "") {
            return "Please enter your role, username & password!";
        } else if ($role === "admin") {
            require_once('../models/adminModel.php');
            $status = login($username, $password);

            if ($status){
                $_SESSION['adminFlag'] = "true";
                setcookie('adminFlag', 'true', time() + 3600, '/');
                setcookie('flag', 'true', time() + 3600, '/');
                return "admin";
            } else  {
                return "Incorrent credentials!";
            }
        } else if ($role === "seller") {
            require_once('../models/sellerModel.php');
            $status = login($username, $password);

            if ($status){
                $_SESSION['flag'] = "true";
                setcookie('sellerFlag', 'true', time() + 3600, '/');
                setcookie('flag', 'true', time() + 3600, '/');
                return "seller";
            } else  {
                return "Incorrent credentials!";
            }
        } else if ($role === "buyer") {
            require_once('../models/buyerModel.php');
            $status = login($username, $password);

            if ($status){
                $_SESSION['flag'] = "true";
                setcookie('buyerFlag', 'true', time() + 3600, '/');
                setcookie('flag', 'true', time() + 3600, '/');
                return "buyer";
            } else  {
                return "Incorrent credentials!";
            }
        } else{
                return "Incorrent credentials!";
        }
    }
?>