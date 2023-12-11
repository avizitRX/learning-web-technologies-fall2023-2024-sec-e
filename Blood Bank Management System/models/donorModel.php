<?php
    include_once 'db.php';

    function findDonor($bloodGroup, $location) {
        $con = getConnection();
        $sql = "select * from donors where bloodGroup like '{$bloodGroup}%' and address like '%{$location}%';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $output = '<tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Blood Group</th>
            <th>Address</th>
            <th>Availability</th>
            <th>Contact Number</th>
        </tr>';
        
            while($donor = mysqli_fetch_assoc($result)) {
                $output .= "<tr><td>{$donor['name']}</td><td>{$donor['age']}</td><td>{$donor['gender']}</td><td>{$donor['bloodGroup']}</td><td>{$donor['address']}</td><td>{$donor['availability']}</td><td>{$donor['contactNumber']}</td></tr>";
            }

            echo $output;
        } else {
            echo "Not Found!";
        }
    }
?>