<?php
    include_once '../models/usersModel.php';

    $bloodGroup = $_REQUEST['bloodGroup'];
    $location = $_REQUEST['location'];

    if (empty($bloodGroup) && empty($location)) {
        echo "Please fill up all the inputs!";
        exit();
    } elseif (empty($bloodGroup)) {
        echo "Please select a blood group!"; 
        exit();
    } elseif (empty($location)) {
        echo "Please enter a location!";
        exit();
    }

    $result = findDonor($bloodGroup, $location);
    echo $result;
?>
