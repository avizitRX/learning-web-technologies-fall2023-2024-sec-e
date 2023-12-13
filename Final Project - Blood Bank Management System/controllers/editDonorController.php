<?php
    include_once '../models/db.php';

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address= $_POST['address'];

    $conn = getConnection();
    $query = "UPDATE users set fname='{$fname}', lname='{$lname}', password='{$password}', cpassword='{$cpassword}', email='$email', phone='$phone', address='$address' WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    echo $data;

    // if($data)
    // {
    //     header('location: ../views/manageDonor.php');
    // }
    // else
    // {
    //     echo "Failed!";
    // }
?>