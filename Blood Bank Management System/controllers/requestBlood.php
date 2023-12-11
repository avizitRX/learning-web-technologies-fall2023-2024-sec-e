<?php
    require_once('../models/db.php');

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
    }
      
?>