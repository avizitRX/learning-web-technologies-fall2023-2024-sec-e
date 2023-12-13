<?php
    require_once '../controllers/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blood</title>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php include_once 'header.php';?>

    <div id="body" class="whitespace">
        <div class="heading">
            <h2>Add Blood</h2>
        </div>
        <div id="result"></div>
        <table width="100%">
            <tr>
            <td width="30%">
                &nbsp;
            </td>
            <td width="40%">
            <table align="center" width="100%">
            <tr>
                <td>
                <h4>Name:</h4></td> 
                <td><input type="text" name="name" id="name" placeholder="Enter Donator's Name" /></td>
            </tr>
            <tr>
                <td>
                <h4>Blood Group:</h4></td> 
                <td>
                    <select name="bloodGroup" id="bloodGroup" value="" >
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <h4>Quntity:</h4></td> 
                <td><input type="text" name="quantity" id="quantity" placeholder="Enter Quantity" /></td>
            </tr>

            <tr>
                <td>
                <h4>Mobile Number:</h4></td> 
                <td><input type="text" name="mobileNumber" id="mobileNumber" placeholder="Enter Donator's Mobile Number" /></td>
            </tr>
           
            <tr>
                <td colspan="2"><input type="button" name="submit" value="Add Blood" class="btn-alt form-btn" onclick="addBlood()"></td>
            </tr>
        </table>
            </td>
            <td width="30%"></td>
            </tr>
        </table>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php include_once 'footer.php';?>
    </div>
</body>
</html>