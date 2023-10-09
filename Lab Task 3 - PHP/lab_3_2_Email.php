<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="">
        <fieldset>
            <p>Email</p>
            <input type="email" name="email" value="<?php echo $_POST['email']??''; ?>"><br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<h2>Submitted Data:</h2>';
            echo '<p>Email: ' . $_REQUEST['email'] . '</p>';
        }
    ?>
</body>
</html>