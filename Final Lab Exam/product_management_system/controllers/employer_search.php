<?php
    include_once '../models/db.php';

    $name = $_REQUEST['name'];
    $company = $_REQUEST['company'];

    $con = getConnection();
    $sql = "select * from employer where name like '%{$name}%' and company like '%{$company}%';";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $output = '<tr>
        <th>Name</th>
        <th>Company</th>
        <th>Contact Number</th>
    </tr>';
        while($employer = mysqli_fetch_assoc($result)){
            $output .= "<tr><td>{$employer['name']}</td><td>{$employer['company']}</td><td>{$employer['contactNumber']}</td></tr>";
        }

        echo $output;
    } else {
        echo "Not Found!";
    }
?>