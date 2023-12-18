<?php
    include_once '../models/requestBloodModel.php';

    $user = $_COOKIE["user"];

    $result = requestBloodByUserJS($user);
    echo $result;
?>