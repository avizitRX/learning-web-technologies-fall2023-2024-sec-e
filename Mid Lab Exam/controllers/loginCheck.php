<?php
    require_once('../model/userModel.php');

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];

    if($id == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        login($id, $password);
    }
?>