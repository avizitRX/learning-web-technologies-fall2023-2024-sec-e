<?php
    include_once '../models/userModel.php';

    $id = $_REQUEST['id'];
    $bloodGroup = $_REQUEST['bloodGroup'];
    $location = $_REQUEST['location'];
    $date = $_REQUEST['date'];
    $mobileNumber = $_REQUEST['mobileNumber'];
    $comment = $_REQUEST['comment'];

    editRequestBlood($id, $bloodGroup, $location, $date, $mobileNumber, $comment);
?>