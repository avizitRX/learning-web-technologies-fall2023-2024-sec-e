<?php
    function changePassword($oldPassword, $password, $password2) {
        $flag = false;
        $errMsg = "";

        if (empty($oldPassword)) {
            $errMsg = "{$errMsg} <br />Old Password is required!";
            $flag = true;
        }

        else if (empty($password)) {
            $errMsg = "{$errMsg} <br />New Password is required!";
            $flag = true;
        } 

        else if (empty($password2)) {
            $errMsg = "{$errMsg} <br />Please confirm New Password!";
            $flag = true;
        }
        
        else if (!($password == $password2)) {
            $errMsg = "{$errMsg} <br />New Password didn't match!";
            $flag = true;
        }

        if (!$flag) {
            include_once '../models/usersModel.php';
            $result = changePasswordModel($oldPassword, $password);
            
            if ($result) {
                $errMsg ="Password Changed Successfully!";
            } else {
                $errMsg = "Failed!";
            }

            return $errMsg;
        }
    }
?>