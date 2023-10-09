<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" id="male" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] =='Male' ){echo "checked";}?>>Male
            <input type="radio" name="gender" id="female" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] =='Female' ){echo "checked";}?>>Female
            <input type="radio" name="gender" id="other" value="Other" <?php if(isset($_POST['gender']) && $_POST['gender'] =='Other' ){echo "checked";}?>>Other
        </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<h2>Submitted Data:</h2>';
            echo '<p>Gender: ' . $_REQUEST['gender'] . '</p>';
        }
    ?>
</body>
</html>