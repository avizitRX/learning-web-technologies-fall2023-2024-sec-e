<?php
    require_once '../models/requestBloodModel.php';

    function addRequestBlood($bloodGroup, $location, $date, $mobileNumber, $comment, $owner) {
        if ($bloodGroup == "" || $location == "" || $date == "" || $mobileNumber == "" || $comment == "" || $owner == "") {
            return "All fields are required!";
        } else {
            $result = addRequestBloodModel($bloodGroup, $location, $date, $mobileNumber, $comment, $owner);
            header("location: requestBlood.php");
        }
    } 
?>