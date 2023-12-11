<?php
    include_once 'db.php';

    function login($username, $password) {
        $con = getConnection();
        
        $sql = "select * from seller where username='{$username}' and password='{$password}'";

        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count === 1) {
            return true;
        } else {
            return false;
        }
    }

    function allSeller() {
        $con = getConnection();
        $sql = "select * from seller";
        $result = mysqli_query($con, $sql);
        $sellers = [];
        
        while($seller = mysqli_fetch_assoc($result)){
            array_push($sellers, $seller);
        }
        
        return $sellers;
    }

    function sellerForId($id) {
        $con = getConnection();
        
        $sql = "select * from seller where id = '{$id}';";
        $result = mysqli_query($con, $sql);
        $seller = [];
        
        while($request = mysqli_fetch_assoc($result)){
            array_push($seller, $request);
        }
        
        return $seller;
    }
?>