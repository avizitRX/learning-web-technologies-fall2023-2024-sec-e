<?php
    require_once('db.php');

    function registration($role, $username, $password, $name, $bloodGroup, $address, $email, $mobileNumber) {
        $con = getConnection();

        $sql = "select * from users where username = '{$username}';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            $sql = "INSERT INTO users (role, username, password, name, bloodGroup, address, email, mobileNumber) VALUES ('{$role}', '{$username}', '{$password}', '{$name}', '{$bloodGroup}', '{$address}', '{$email}', '{$mobileNumber}')";
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
            $_SESSION['user'] = $user;

            if ($user['role'] == "Staff") {
                return "staff";
            } else if ($user['role'] == "Recipient") {
                return "recipient";
            } else if ($user['role'] == "Donor") {
                return "donor";
            }
        } else{
            return "failed";
        }
    }

    function findAllDonor() {
        $con = getConnection();
        $sql = "select * from users where role = 'donor';";
        $result = mysqli_query($con, $sql);
        $donors = [];
        
        while($donor = mysqli_fetch_assoc($result)){
            array_push($donors, $donor);
        }
        
        return $donors;
    }

    // function findDonor($bloodGroup, $location) {
    //     $con = getConnection();
    //     $sql = "select * from donors where bloodGroup = '{$bloodGroup}' and availability = 'Available' and address like '%{$location}%'";
    //     $result = mysqli_query($con, $sql);
    //     $donors = [];
        
    //     while($donor = mysqli_fetch_assoc($result)){
    //         array_push($donors, $donor);
    //     }
        
    //     return $donors;
    // }

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
            echo 'Profile Updated!';
        }else{
            echo 'Error!';
        }
    }

    function changePasswordModel($oldPassword, $password) {
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

    function findDonor($bloodGroup, $location) {
        $con = getConnection();
        $sql = "select * from users where role='donor' and bloodGroup like '{$bloodGroup}%' and address like '%{$location}%';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $donors = [];

            while($donor = mysqli_fetch_assoc($result)) {
                array_push($donors, $donor);
            }

            echo json_encode($donors);
        //     $output = '<tr>
        //     <th>Name</th>
        //     <th>Age</th>
        //     <th>Gender</th>
        //     <th>Blood Group</th>
        //     <th>Address</th>
        //     <th>Availability</th>
        //     <th>Contact Number</th>
        // </tr>';
        
        //     while($donor = mysqli_fetch_assoc($result)) {
        //         $output .= "<tr><td>{$donor['name']}</td><td>{$donor['age']}</td><td>{$donor['gender']}</td><td>{$donor['bloodGroup']}</td><td>{$donor['address']}</td><td>{$donor['availability']}</td><td>{$donor['mobileNumber']}</td></tr>";
        //     }

        //     echo $output;
        } else {
            echo "Not Found!";
        }
    }

    function viewAllDonor() {
        $conn = getConnection();
        $query = "SELECT * FROM users where role = 'Donor';";
        $data = mysqli_query($conn, $query);

        $result = [];
        
        while($entry = mysqli_fetch_assoc($data)){
            array_push($result, $entry);
        }

        return $result;
    }

    function viewDonorForId($id) {
        $conn = getConnection();
        $query = "SELECT * FROM users where id = '$id'";
        $data = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($data);

        return $result;
    }
?>