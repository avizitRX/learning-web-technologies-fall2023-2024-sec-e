<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <legend>Date of Birth</legend>
            <input type="date" name="dob" id="dob" value="<?php echo $_POST['email']??''; ?>">
            
        </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<h2>Submitted Data:</h2>';
            echo '<p>Date of Birth: ' . $_REQUEST['dob'] . '</p>';
        }
    ?>
</body>
</html>