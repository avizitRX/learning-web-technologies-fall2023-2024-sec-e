<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/usersModel.php';

    $bloodGroup = $location = "";

    $donors = findAllDonor();

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //   $bloodGroup = $_REQUEST['bloodGroup'];
    //   $location = $_REQUEST['location'];

    //   // if (empty($_REQUEST['location'])) {
    //   //   $donors = findAllDonor();
    //   // } else {
    //   //     $location = $_REQUEST['location'];
    //   // }

    //   include_once '../controllers/findDonorController.php';
    //   $result = findDonorController($bloodGroup, $location);
      
    //   if ($result === "error") {
    //     $msg = "Error!";
    //   } else {
    //     $donors = $result;
    //   }
    // }
?>

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
      <div class="whitespace">
    <section>
      <div class="heading">
        <h2>Find Donor</h2>
      </div>
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>
            <br />
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
                <br />
                <input type="submit" name="submit" value="Search" onclick="findDonor()" class="btn-alt form-btn" />
                <br /><br />
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
            <div class="find-donor-table">
              <table border="1" width="100%" id="result">
                <tr>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Blood Group</th>
                  <th>Address</th>
                  <th>Availability</th>
                  <th>Contact Number</th>
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
      </div>
    </section>
    <?php include_once 'footer.php';?>
</div>
</body>
</html>