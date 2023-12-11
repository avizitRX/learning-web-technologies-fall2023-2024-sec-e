<?php
    require_once '../controllers/adminSessionCheck.php';
    include_once '../models/employerModel.php';

    $employers = allEmployer();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
  </head>
  <body>
    <?php include_once 'adminHeader.php' ?>
  <section>
      <br><br>
      <table border="0" width="100%">
        <tr>
          <td width="25%">&nbsp;</td>
          <td width="50%">
          <table border="1" width="100%">
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Contact Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php for($i = 0; $i < count($employers); $i++) { ?>
            <tr>
                <td><?=$employers[$i]['name']?></td>
                <td><?=$employers[$i]['company']?></td>
                <td><a href="tel:<?=$employers[$i]['contactNumber']?>"><?=$employers[$i]['contactNumber']?></a></td>
                <td><a href="../controllers/editEmployee.php?id=<?=$employers[$i]['id']?>"><button width="100%">Edit</button></a></td>
                <td><a href="../controllers/deleteEmployee.php?id=<?=$employers[$i]['id']?>"><button>Delete</button></a></td>
            </tr>
            <?php } ?>
          </table>
          </td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
    </section>
  </body>
</html>
