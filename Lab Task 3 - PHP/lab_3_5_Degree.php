<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <?php
        $selected = [];
        if (isset($_REQUEST['degree']))
        {
            foreach ($_REQUEST['degree'] as $selectednumber)
                $selected[$selectednumber] = "checked";
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degree[]" value="SSC" <?php echo $selected['SSC'] ?>>SSC
            <input type="checkbox" name="degree[]" value="HSC" <?php echo $selected['HSC'] ?>>HSC
            <input type="checkbox" name="degree[]" value="BSc" <?php echo $selected['BSc'] ?>>BSc
        </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<h2>Submitted Data:</h2>';
            $degree = $_REQUEST['degree'];
            if(empty($degree))
            {
                echo '<p>You didn\'t select any Degree.</p>';
            } 
            else 
            {
                $N = count($degree);

                echo("Degree: ");
                for($i=0; $i < $N; $i++)
                {
                echo($degree[$i] . " ");
                }
            }
        }
    ?>
</body>
</html>