<?php
    function getConnection(){
        $dbhost = 'localhost';
        $dbname = 'blood_bank';
        $dbuser = 'root';
        $dbpass = '';

        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>