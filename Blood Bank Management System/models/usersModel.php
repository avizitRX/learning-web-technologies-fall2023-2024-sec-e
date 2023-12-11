<?php
    require_once('db.php');

    function registration($role, $username, $password, $name, $address, $email, $mobileNumber) {
        $con = getConnection();

        $sql = "select * from users where username = '{$username}';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            $sql = "INSERT INTO users (role, username, password, name, address, email, mobileNumber) VALUES ('{$role}', '{$username}', '{$password}', '{$name}', '{$address}', '{$email}', '{$mobileNumber}')";
            $result = mysqli_query($con, $sql);
            // $user = mysqli_fetch_assoc($result);
            
            if($result) {
                header('location: ../views/login.php');
            } else {
                return 'Error!';
            }
        } else {
            return 'Username already exists!';
        }

    }

    function login($username, $password) {
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $user = mysqli_fetch_assoc($result);

            if ($user['role'] == "staff") {
                return "staff";
            } else if ($user['role'] == "recipient") {
                return "recipient";
            } else if ($user['role'] == "donor") {
                return "donor";
            }
        } else{
            return "failed";
        }
    }

    function findAllDonor() {
        $con = getConnection();
        $sql = "select * from donors";
        $result = mysqli_query($con, $sql);
        $donors = [];
        
        while($donor = mysqli_fetch_assoc($result)){
            array_push($donors, $donor);
        }
        
        return $donors;
    }

    function findDonor($bloodGroup, $location) {
        $con = getConnection();
        $sql = "select * from donors where bloodGroup = '{$bloodGroup}' and availability = 'Available' and address like '%{$location}%'";
        $result = mysqli_query($con, $sql);
        $donors = [];
        
        while($donor = mysqli_fetch_assoc($result)){
            array_push($donors, $donor);
        }
        
        return $donors;
    }

    function profile() {
        $username = $_COOKIE['user'];
        $con = getConnection();
        $sql = "select * from users where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $profile = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($profile, $user);
        }
        
        return $profile;
    }

    function profileUpdateModel($name, $address, $email, $mobileNumber) {
        $username = $_COOKIE['user'];

        $con = getConnection();
        $sql = "UPDATE users SET name = '{$name}', address = '{$address}', email = '{$email}', mobileNumber = '{$mobileNumber}' WHERE username = '{$username}';";
        $result = mysqli_query($con, $sql);
        // $user = mysqli_fetch_assoc($result);
        
        if($result){
            header('location: ../views/profile.php');
        }else{
            echo 'Error!';
        }
    }

    function changePassword($oldPassword, $password) {
        $username = $_COOKIE['user'];

        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$oldPassword}';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $sql = "update users set password = '{$password}' where username = '{$username}';";
            $result = mysqli_query($con, $sql);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }

    function addRequestBlood($bloodGroup, $location, $date, $mobileNumber, $comment, $owner) {
        $id = "";

        $con = getConnection();
        $sql = "INSERT INTO requestBlood (bloodGroup, location, date, mobileNumber, comment, owner) VALUES ('{$bloodGroup}', '{$location}', '{$date}', '{$mobileNumber}', '{$comment}', '{$owner}')";
        $result = mysqli_query($con, $sql);
        // $user = mysqli_fetch_assoc($result);
        
        if($result) {
            return true;
        } else {
            return false;
        }
    }

    function viewRequestBlood($user) {
        $con = getConnection();
        if ($user == 'all') {
            $sql = "select * from requestBlood order by id desc";
        } else {
            $sql = "select * from requestBlood where owner = '{$user}' order by id desc";
        }
        $result = mysqli_query($con, $sql);
        $requestBlood = [];
        
        while($request = mysqli_fetch_assoc($result)){
            array_push($requestBlood, $request);
        }
        
        return $requestBlood;
    }

    function viewRequestBloodForId($id) {
        $con = getConnection();
        
        $sql = "select * from requestBlood where id = '{$id}';";
        $result = mysqli_query($con, $sql);
        $requestBlood = [];
        
        while($request = mysqli_fetch_assoc($result)){
            array_push($requestBlood, $request);
        }
        
        return $requestBlood;
    }

    function editRequestBlood($id, $bloodGroup, $location, $date, $mobileNumber, $comment) {
        $con = getConnection();
        $sql = "update requestBlood set bloodGroup = '{$bloodGroup}', location = '{$location}', date = '{$date}', mobileNumber = '{$mobileNumber}', comment = '{$comment}' where id = '{$id}';";
        $result = mysqli_query($con, $sql);
        // $user = mysqli_fetch_assoc($result);
        
        if($result) {
            header('location: ../views/requestBlood.php');
        } else {
            return false;
        }
    }
?>