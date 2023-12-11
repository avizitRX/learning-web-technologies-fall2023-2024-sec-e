<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        include_once '../models/db.php';

        $con = getConnection();
        $sql = "delete from requestBlood where id = '{$id}';";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location: ../views/requestBlood.php');
        } else {
            echo 'Deletion failed!';
        }
    }
?>