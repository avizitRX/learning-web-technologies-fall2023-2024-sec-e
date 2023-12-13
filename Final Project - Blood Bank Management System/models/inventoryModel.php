<?php
    include_once 'db.php';

    function addBlood($name, $bloodGroup, $quantity, $mobileNumber) {
        $conn = getConnection();
        $sql = "insert into inventory (name, bloodGroup, quantity, mobileNumber) values ('{$name}', '{$bloodGroup}', '{$quantity}', '{$mobileNumber}')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'Blood added successfully!';
        }
        else {
            echo 'Failed to add blood!';
        }
    }

    function bloodQuantity($bloodGroup) {
        $conn = getConnection();
        $query = "SELECT SUM(quantity) FROM inventory WHERE bloodGroup = '$bloodGroup';";
        $run = mysqli_query($conn, $query);

        $quantity = [];
        
        while($request = mysqli_fetch_assoc($run)){
            array_push($quantity, $request);
        }
        
        return $quantity;
    }

    function bloodInventory() {
        include_once 'db.php';

        $con = getConnection();
        $sql = "select * from inventory;";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $inventory = [];

            while($request = mysqli_fetch_assoc($result)) {
                array_push($inventory, $request);
            }
        }
        echo json_encode($inventory);
    }
?>