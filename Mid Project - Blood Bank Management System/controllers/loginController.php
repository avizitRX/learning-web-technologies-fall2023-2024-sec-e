<?php 
    function loginControl($username, $password) {
        session_start();
        require_once('../models/userModel.php');    
        $status = login($username, $password);

        if($status){
            $_SESSION['flag'] = "true";
            setcookie('flag', 'true', time() + 3600, '/');
            setcookie('user', $username, time() + 3600, '/');
            return true;
        }else{
            return false;
        }
    }
?>