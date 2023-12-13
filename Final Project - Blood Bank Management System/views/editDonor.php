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
        <table align="center">
            <tr>
                <td>
                <h4>ID:</h4></td> 
                <td><input type="text" name="id"  value="<?php echo $result['id']; ?>" required readonly /></td>
            </tr>
            <tr>
                <td>
                <h4>First Name:</h4></td> 
                <td><input type="text" name="fname"  value="<?php echo $result['fname']; ?>" placeholder="Enter Your First Name" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Last Name:</h4></td> 
                <td><input type="text" name="lname" value="<?php echo $result['lname']; ?>" placeholder="Enter Your Last Name" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Password:</h4></td> 
                <td><input type="password" name="password" value="<?php echo $result['password']; ?>" placeholder="Enter Your Password" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Confirm Password:</h4></td> 
                <td><input type="password" name="cpassword" value="<?php echo $result['cpassword']; ?>" placeholder="Confirm Your Password" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Email:</h4></td> 
                <td><input type="email" name="email" value="<?php echo $result['email']; ?>" placeholder="Enter Your Email" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Phone Number:</h4></td> 
                <td><input type="text" name="phone" value="<?php echo $result['phone']; ?>" placeholder="Enter Your Number" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Address:</h4></td> 
                <td><textarea name="address"  cols="30" rows="5" required> <?php echo $result['address']; ?></textarea></td>
            </tr>
           
            <tr>
                <td><input type="Submit" name="update" value="Update"></td>
            </tr>
        </table>
        </form>

</body>
</html>