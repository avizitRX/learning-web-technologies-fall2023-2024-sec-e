<?php
    function getConnection(){   
        $dbhost = 'localhost';
        $dbname = 'online_shop_management_system';
        $dbuser = 'root';
        $dbpass = '';

        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>