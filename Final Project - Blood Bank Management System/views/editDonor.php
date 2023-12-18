<?php 
    include_once '../models/usersModel.php'; 
    $id =  $_GET['id'];

    $result = viewDonorForId($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Donor</title>
</head>
<body>
<?php include_once 'header.php';?>
<div id="header">
        <fieldset>
        <br><br><br>
        <center><h2>Update Doner Information</h2></center>
        <br><br>
        </fieldset>
        
    </div>
    <div id="body">
        <br><br>
        <form action="../controllers/editDonorController.php" method="POST">
        <table width="100%">
            <tr>
                <td width="30%">&nbsp;</td>
                <td>
                    <table align="center" width="100%">
                        <tr>
                            <td>
                            <h4>ID:</h4></td> 
                            <td><input type="text" name="id"  value="<?php echo $result['id']; ?>" required readonly /></td>
                        </tr>
                        <tr>
                            <td>
                            <h4>First Name:</h4></td> 
                            <td><input type="text" name="name"  value="<?php echo $result['name']; ?>" placeholder="Enter Your Name" required/></td>
                        </tr>
                        <tr>
                            <td>
                            <h4>Password:</h4></td> 
                            <td><input type="password" name="password" value="" placeholder="Enter Your Password" required/></td>
                        </tr>
                        <tr>
                            <td>
                            <h4>Confirm Password:</h4></td> 
                            <td><input type="password" name="cpassword" value="" placeholder="Confirm Your Password" required/></td>
                        </tr>
                        <tr>
                            <td>
                            <h4>Email:</h4></td> 
                            <td><input type="email" name="email" value="<?php echo $result['email']; ?>" placeholder="Enter Your Email" required/></td>
                        </tr>
                        <tr>
                            <td>
                            <h4>Phone Number:</h4></td> 
                            <td><input type="text" name="phone" value="<?php echo $result['mobileNumber']; ?>" placeholder="Enter Your Number" required/></td>
                        </tr>
                        <tr>
                            <td>
                            <h4>Address:</h4></td> 
                            <td><textarea name="address"  cols="30" rows="5" required> <?php echo $result['address']; ?></textarea></td>
                        </tr>
                    
                        <tr>
                            <td><input type="Submit" name="update" value="Update" class="btn-alt"></td>
                        </tr>
                    </table>
                </td>
                <td width="30%">&nbsp;</td>
            </tr>
        </table>
        </form>

</body>
</html>