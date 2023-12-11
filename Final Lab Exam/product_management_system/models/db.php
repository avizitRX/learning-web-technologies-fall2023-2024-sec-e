<?php
    function getConnection(){   
        $dbhost = 'localhost';
        $dbname = 'product_management';
        $dbuser = 'root';
        $dbpass = '';

        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>