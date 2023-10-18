<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    if($username == "" || $password == ""){
        echo "null value";
    }else if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
        $_SESSION['flag'] = 'true';
        header('location: ../views/dashboard.php');
    }else{
        echo "Invalid username/password!";
    }
?>