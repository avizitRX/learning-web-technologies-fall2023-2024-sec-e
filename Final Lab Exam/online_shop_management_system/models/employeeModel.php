<?php
    function search($name, $username) {
        include_once 'db.php';
    
        $con = getConnection();
        $sql = "select * from employee where name like '%{$name}%' and username like '%{$username}%';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $output = '<tr>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Contact Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>';
            while($employee = mysqli_fetch_assoc($result)){
                $output .= "<tr><td>{$employee['name']}</td><td>{$employee['username']}</td><td>{$employee['password']}</td><td>{$employee['contactNumber']}</td><td><a href=''><button>Edit</button></a></td><td><a href='../controllers/deleteEmployeeController.php?id=<?=$employee[`id`]?>'><button>Delete</button></a></td></tr>";
            }

            echo $output;
        } else {
            echo "Not Found!";
        }
    }
?>