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
        <table>
            <tr>
                <td width="30%">&nbsp;</td>
                <td>
                    <table border= "1" width="100%" >
                    <tr>
                        <td colspan="5"></td>
                        <td>
                            <a href="../views/registration.php"><button type="button" class="btn">Add Donor</button></a>
                        </td>
                    </tr>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>  
                            <th>Address</th>
                            <th>Operations</th>
                        </tr>

                        <?php
                            for($i = 0; $i < count($result); $i++) {
                            {
                                echo " <tr>
                                        <td>".$result[$i]['id']."</td>
                                        <td>".$result[$i]['name']."</td>
                                        <td>".$result[$i]['email']."</td>
                                        <td>".$result[$i]['mobileNumber']."</td>
                                        <td>".$result[$i]['address']."</td>

                                        <td><a href='editDonor.php?id=".$result[$i]['id']."'> <input type='button' class='dlt-btn' value = 'Edit'/></a> 
                                        <a href='../controllers/deleteDonorController.php?id=".$result[$i]['id']."'> <input type='button' class='dlt-btn' value = 'Delete' /></a> </td>
                                        
                                    </tr>";
                            }
                        }
                        ?>
                    </table>
                </td>
                <td width="30%">&nbsp;</td>
            </tr>
        </table>
        
</div>
</center>
</body>
</html>