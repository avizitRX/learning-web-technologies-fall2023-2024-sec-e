<?php
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $mobileNumber = $_REQUEST['mobileNumber'];

    require_once('../models/usersModel.php');
    $result = profileUpdateModel($name, $address, $email, $mobileNumber);
    echo $result;
?>