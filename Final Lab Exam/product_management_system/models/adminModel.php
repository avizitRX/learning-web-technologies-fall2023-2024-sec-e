<?php
    include_once 'db.php';

    function login($username, $password) {
        $con = getConnection();
        
        $sql = "select * from admin where username='{$username}' and password='{$password}'";

        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count === 1) {
            return true;
        } else {
            return false;
        }
    }
?>