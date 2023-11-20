<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/userModel.php';

    $requestBlood = viewRequestBlood('all');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php include_once 'header.php';?>

    <br /><br />
    <h2 style="text-align:center">Blood Request Feed</h2>

    <section>
      <br />
      <table border="0" width="100%">
        <tr>
          <td width="25%">&nbsp;</td>
          <td>
          <?php for($i = 0; $i < count($requestBlood); $i++) { ?>
            <table border="0" width="100%">
                <tr>
                    <td colspan="2"><?=$requestBlood[$i]['comment']?></td>
                </tr>
                <tr>
                    <td>
                        <br />
                    </td>
                </tr>
                <tr>
                    <td><b>Blood Group: </b><?=$requestBlood[$i]['bloodGroup']?></td>
                    <td style="text-align: right;"><b>Location: </b><?=$requestBlood[$i]['location']?></td>
                </tr>

                <tr>
                    <td><b>Date: </b><?=$requestBlood[$i]['date']?></td>
                    <td style="text-align: right;"><b>Contact: </b><a href="tel:<?=$requestBlood[$i]['mobileNumber']?>"><?=$requestBlood[$i]['mobileNumber']?></a></td>
                </tr>
            </table>
            <br />
            <hr />
            <br />
            <?php } ?>
        </td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
    </section>
</body>
</html>