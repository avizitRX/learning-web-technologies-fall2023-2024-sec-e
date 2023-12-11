<!-- <?php
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
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Donor</title>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php include_once 'header.php';?>

    <section>
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>
            <br />
              <fieldset>
                <legend>Find Donor</legend>
                <br />
                Blood Group: <select name="bloodGroup" id="bloodGroup" value="<?php echo $bloodGroup;?>">
                    <option value="" <?php if (isset($bloodGroup) && $bloodGroup=="") echo "selected";?>>-</option>
                    <option value="A" <?php if (isset($bloodGroup) && $bloodGroup=="A+") echo "selected";?>>A+</option>
                    <option value="A"<?php if (isset($bloodGroup) && $bloodGroup=="A-") echo "selected";?>>A-</option>
                    <option value="B"<?php if (isset($bloodGroup) && $bloodGroup=="B+") echo "selected";?>>B+</option>
                    <option value="B"<?php if (isset($bloodGroup) && $bloodGroup=="B-") echo "selected";?>>B-</option>
                    <option value="O"<?php if (isset($bloodGroup) && $bloodGroup=="O+") echo "selected";?>>O+</option>
                    <option value="O"<?php if (isset($bloodGroup) && $bloodGroup=="O-") echo "selected";?>>O-</option>
                    <option value="AB"<?php if (isset($bloodGroup) && $bloodGroup=="AB+") echo "selected";?>>AB+</option>
                    <option value="AB"<?php if (isset($bloodGroup) && $bloodGroup=="AB-") echo "selected";?>>AB-</option>
                </select>
                <br /><br />
                Location:
                <input type="text" name="location" id="location" value="<?php echo $location;?>" />
                <br /><br />
                <input type="submit" name="submit" value="Search" onclick="findDonor()" />
                <br /><br />
              </fieldset>
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
          <table border="1" width="100%" id="result">

          </table>
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>
</body>
</html>