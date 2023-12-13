<?php
    include_once '../models/inventoryModel.php';

    $name=$_REQUEST['name'];
    $bloodGroup=$_REQUEST['bloodGroup'];
    $quantity=$_REQUEST['quantity'];
    $mobileNumber = $_REQUEST['mobileNumber'];

    $result = addBlood($name, $bloodGroup, $quantity, $mobileNumber);
    echo $result;
?>