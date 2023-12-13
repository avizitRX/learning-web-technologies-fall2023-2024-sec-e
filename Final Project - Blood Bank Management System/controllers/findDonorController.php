<?php
    include_once '../models/usersModel.php';

    $bloodGroup = $_REQUEST['bloodGroup'];
    $location = $_REQUEST['location'];

    $result = findDonor($bloodGroup, $location);
    echo $result;
?>