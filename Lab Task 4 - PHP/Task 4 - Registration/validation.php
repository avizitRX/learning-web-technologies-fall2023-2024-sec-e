<?php
    session_start();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob_dd = $_POST['dob_dd'];
    $dob_mm = $_POST['dob_mm'];
    $dob_yyyy = $_POST['dob_yyyy'];

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($gender) || empty($dob_dd) || empty($dob_mm) || empty($dob_yyyy)) {
        echo "Please fill in all fields.";
    } else if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        $user = [
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'gender' => $gender,
            'dob_dd' => $dob_dd,
            'dob_mm' => $dob_mm,
            'dob_yyyy' => $dob_yyyy
        ];

        $_SESSION['user'] = $user;
        header('location: login.html');
    }
?>