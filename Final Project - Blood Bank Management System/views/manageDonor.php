<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/usersModel.php';

    $result = viewAllDonor();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Donor</title>
</head>
<body>
    <?php include_once 'header.php';?>

    <div class="heading">
        <h2>Manage Donor</h2>
    </div>

    <center>
    <div class="find-donor-table">
        <table border= "1" cellspacing= "7" width="80%" >
        <tr width="0">
            <td colspan="6" width="80%">&nbsp;</td>
            <td style="text-align: center;">
            <a href="registration.php">Add Donor</a>
            </td>
        </tr>
        <tr>
            <th width="3%">ID</th>
            <th width="12%">First Name</th>
            <th width="12%">Last Name</th>
            <th width="11%">Email</th>
            <th width="10%">Phone</th>  
            <th width="15%">Address</th>
            <th width="9%">Operations</th>
        </tr>

    <?php
        for($i = 0; $i < count($result); $i++) {
        {
            echo " <tr>
                    <td>".$result[$i]['id']."</td>
                    <td>".$result[$i]['fname']."</td>
                    <td>".$result[$i]['lname']."</td>
                    <td>".$result[$i]['email']."</td>
                    <td>".$result[$i]['phone']."</td>
                    <td>".$result[$i]['address']."</td>

                    <td><a href='editDonor.php?id=".$result[$i]['id']."'> <input type='button' class='dlt-btn' value = 'Edit'/></a> 
                    <a href='../controllers/deleteDonorController.php?id=".$result[$i]['id']."'> <input type='button' class='dlt-btn' value = 'Delete' /></a> </td>
                    
                </tr>";
        }
    }
    ?>
</table>
</div>
</center>
</body>
</html>