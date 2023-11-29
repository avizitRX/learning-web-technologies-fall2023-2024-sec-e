<?php
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
?>