<?php
    include_once '../models/inventoryModel.php';

    $name = $_REQUEST['name'];
    $bloodGroup = $_REQUEST['bloodGroup'];
    $quantity = $_REQUEST['quantity'];
    $mobileNumber = $_REQUEST['mobileNumber'];

    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($bloodGroup)) {
        $errors[] = "Blood Group is required";
    }

    if (empty($quantity) || !is_numeric($quantity) || $quantity <= 0) {
        $errors[] = "Quantity must be a positive number";
    }

    if (empty($mobileNumber) || !preg_match("/^[0-9]{10}$/", $mobileNumber)) {
        $errors[] = "Invalid mobile number format";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo " $error<br>";
        }
        exit();
    }

    $result = addBlood($name, $bloodGroup, $quantity, $mobileNumber);
    echo $result;
?>