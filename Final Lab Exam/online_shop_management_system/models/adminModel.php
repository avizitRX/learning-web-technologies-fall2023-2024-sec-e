<?php
    require_once 'db.php';

    function register($username, $password, $email) {
        $con = getConnection();

        $sql = "select * from admin where username = '{$username}';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            $sql = "INSERT INTO admin (username, email, password) VALUES ('{$username}', '{$email}' , '{$password}')";
            $result = mysqli_query($con, $sql);
            // $user = mysqli_fetch_assoc($result);
            
            if($result) {
                echo 'Registration Successful!';
            } else {
                echo 'Error!';
            }
        } else {
            echo 'Username already exists!';
        }
    }

    function login($username, $password) {
        $con = getConnection();
        $sql = "select * from admin where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
?>