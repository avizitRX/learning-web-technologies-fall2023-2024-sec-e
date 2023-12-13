<?php
    include_once '../controllers/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Inventory</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <?php include_once 'header.php' ?>
    <center>
      <br /><br />
      <input
        type="button"
        id="btn"
        value="Show Inventory"
        onclick="showInventory()"
      />
      <br /><br />
      <div class="find-donor-table">
      <table width="60%" border="1" id="result">
        <tr>
          <th>Blood Group</th>
          <th>Blood Quantity</th>
        </tr>
      </table>
      </div>
    </center>
  </body>
</html>