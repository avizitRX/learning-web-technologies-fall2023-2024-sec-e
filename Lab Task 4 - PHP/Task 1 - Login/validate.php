<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$remember = isset($_REQUEST['remember']) ? true : false;

$username_pattern = "/^[A-Za-z0-9._-]{2,}$/";
$password_pattern = "/^.{8,}$/";
$password_special_character_pattern = "/[@#\$%]/";

if ($username == "" || $password == "") {
    echo "Null username or password!";
} elseif (preg_match($username_pattern, $username) && preg_match($password_pattern, $password) && preg_match($password_special_character_pattern, $password)) {
    if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']) {
        if ($remember) {
            setcookie('remembered_user', $username, time() + 3600 * 24 * 30, '/');
        }

        setcookie('flag', 'true', time() + 3600, '/');
        header('location: home.php');
    } else {
        echo "Login";
    }
} else {
    echo "Invalid username or password format!";
}
?>