<?php
    include_once '../models/employeeModel.php';

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];

    $result = search($name, $username);
    echo $result;
?>