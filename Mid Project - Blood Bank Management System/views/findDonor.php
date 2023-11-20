<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/userModel.php';
    
    $errMsg = $bloodGroup = $location = "";
    $donors = findAllDonor();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $flag = false;

      if (empty($_REQUEST['bloodGroup'])) {
        // $errMsg = "{$errMsg} <br />Blood Group is required!";
        $flag = true;
      } else {
          $bloodGroup = $_REQUEST['bloodGroup'];
      }

      // if (empty($_REQUEST['location'])) {
      //   $donors = findAllDonor();
      // } else {
      //     $location = $_REQUEST['location'];
      // }
      
      $location = $_REQUEST['location'];

      if (!$flag) {
        $donors = findDonor($bloodGroup, $location);
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Donor</title>
</head>
<body>
    <?php include_once 'header.php';?>

    <section>
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>
            <p style="color: red"><?php echo $errMsg;?></p>
            <br />
            <form
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype=""
            >
              <fieldset>
                <legend>Find Donor</legend>
                <br />
                Blood Group: <select name="bloodGroup" id="bloodGroup" value="<?php echo $bloodGroup;?>">
                    <option value="" <?php if (isset($bloodGroup) && $bloodGroup=="") echo "selected";?>>-</option>
                    <option value="A+" <?php if (isset($bloodGroup) && $bloodGroup=="A+") echo "selected";?>>A+</option>
                    <option value="A-"<?php if (isset($bloodGroup) && $bloodGroup=="A-") echo "selected";?>>A-</option>
                    <option value="B+"<?php if (isset($bloodGroup) && $bloodGroup=="B+") echo "selected";?>>B+</option>
                    <option value="B-"<?php if (isset($bloodGroup) && $bloodGroup=="B-") echo "selected";?>>B-</option>
                    <option value="O+"<?php if (isset($bloodGroup) && $bloodGroup=="O+") echo "selected";?>>O+</option>
                    <option value="O-"<?php if (isset($bloodGroup) && $bloodGroup=="O-") echo "selected";?>>O-</option>
                    <option value="AB+"<?php if (isset($bloodGroup) && $bloodGroup=="AB+") echo "selected";?>>AB+</option>
                    <option value="AB-"<?php if (isset($bloodGroup) && $bloodGroup=="AB-") echo "selected";?>>AB-</option>
                </select>
                <br /><br />
                Location:
                <input type="text" name="location" value="<?php echo $location;?>" />
                <br /><br />
                <input type="submit" name="submit" value="Search" />
                <br /><br />
              </fieldset>
            </form>
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>

    <section>
      <br><br>
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>
          <table border="1" width="100%">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>Availability</th>
                <th>Contact</th>
            </tr>

            <?php for($i = 0; $i < count($donors); $i++) { ?>
            <tr>
                <td><?=$donors[$i]['name']?></td>
                <td><?=$donors[$i]['age']?></td>
                <td><?=$donors[$i]['gender']?></td>
                <td><?=$donors[$i]['bloodGroup']?></td>
                <td><?=$donors[$i]['address']?></td>
                <td><?=$donors[$i]['availability']?></td>
                <td><a href="tel:<?=$donors[$i]['mobileNumber']?>"><?=$donors[$i]['mobileNumber']?></a></td>
            </tr>
            <?php } ?>   

        </table>
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>
</body>
</html>