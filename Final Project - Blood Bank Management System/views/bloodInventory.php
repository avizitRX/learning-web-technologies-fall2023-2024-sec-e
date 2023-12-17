<?php
    include_once '../controllers/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Inventory</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <?php include_once 'header.php' ?>

    <table width="100%">
      <tr>
        <td width="30%">&nbsp;</td>
        <td>
        <center>
          <br /><br />
          <input
            type="button"
            id="btn"
            class="btn-alt"
            value="Show Log"
            onclick="showInventory()"
          />
          <br /><br />
          <div class="find-donor-table">
          <table width="60%" border="1" id="result">
            <tr>
              <th>Name</th>
              <th>Blood Group</th>
              <th>Blood Quantity</th>
            </tr>
          </table>
          </div>
        </center>
        </td>
        <td width="30%">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>