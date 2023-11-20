<?php
    require_once('../models/db.php');

    function inventoryQuantity() {
        $con = getConnection();
        $sql = "select * from inventory";
        $result = mysqli_query($con, $sql);
        $inventory = [];
        
        while($bloodQuantity = mysqli_fetch_assoc($result)){
            array_push($inventory, $bloodQuantity);
        }
        
        return $inventory;
    }
?>