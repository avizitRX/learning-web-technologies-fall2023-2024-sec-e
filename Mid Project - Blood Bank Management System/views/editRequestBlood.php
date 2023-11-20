<?php
    include_once '../controllers/sessionCheck.php';
    include_once '../models/userModel.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $requestBlood = viewRequestBloodForId($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blood Request</title>
</head>
<body>
    <?php include_once 'header.php';?>

    <section>
    <table border="0" width="100%">
        <tr>
        <td width="25%"></td>
        <td>
            <br />
            <form
            method="post"
            action="../controllers/editRequestBloodController.php"
            enctype=""
            >
            <fieldset>
                <legend>Edit Request Blood</legend>
                <br />
                Post ID:
                <input type="text" name="id" value="<?=$requestBlood[0]['id']?>" readonly />
                <br /><br />
                Blood Group: <select name="bloodGroup" id="bloodGroup" value="<?php echo $bloodGroup;?>" required>
                    <option value="" <?php if ($requestBlood[0]['bloodGroup']=="") echo "selected";?>>-</option>
                    <option value="A+" <?php if ($requestBlood[0]['bloodGroup']=="A+") echo "selected";?>>A+</option>
                    <option value="A-"<?php if ($requestBlood[0]['bloodGroup']=="A-") echo "selected";?>>A-</option>
                    <option value="B+"<?php if ($requestBlood[0]['bloodGroup']=="B+") echo "selected";?>>B+</option>
                    <option value="B-"<?php if ($requestBlood[0]['bloodGroup']=="B-") echo "selected";?>>B-</option>
                    <option value="O+"<?php if ($requestBlood[0]['bloodGroup']=="O+") echo "selected";?>>O+</option>
                    <option value="O-"<?php if ($requestBlood[0]['bloodGroup']=="O-") echo "selected";?>>O-</option>
                    <option value="AB+"<?php if ($requestBlood[0]['bloodGroup']=="AB+") echo "selected";?>>AB+</option>
                    <option value="AB-"<?php if ($requestBlood[0]['bloodGroup']=="AB-") echo "selected";?>>AB-</option>
                </select>
                <br /><br />
                Location:
                <input type="text" name="location" value="<?=$requestBlood[0]['location']?>" required />
                <br /><br />
                Date:
                <input type="date" name="date" value="<?=$requestBlood[0]['date']?>" required />
                <br /><br />
                Mobile Number:
                <input type="text" name="mobileNumber" value="<?=$requestBlood[0]['mobileNumber']?>" required />
                <br /><br />
                Comment:
                <textarea name="comment" id="comment" cols="30" rows="10">
                <?=$requestBlood[0]['comment']?>
                </textarea>
                <br /><br />
                <input type="submit" name="submit" value="Submit" />
                <br /><br />
            </fieldset>
            </form>
        </td>
        <td width="25%"></td>
        </tr>
    </table>
    </section>
</body>
</html>
