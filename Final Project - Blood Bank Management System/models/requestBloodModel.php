<?php
    include_once 'db.php';

    function addRequestBloodModel($bloodGroup, $location, $date, $mobileNumber, $comment, $owner) {
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