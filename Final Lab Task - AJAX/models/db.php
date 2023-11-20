<?php
    function getConnection(){   
        $dbhost = 'localhost';
        $dbname = 'web_tech_job_portal';
        $dbuser = 'root';
        $dbpass = '';

        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>