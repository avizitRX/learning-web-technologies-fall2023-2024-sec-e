<?php
    require_once '../controllers/sessionCheck.php';
    include_once 'header.php';
    include_once '../models/userModel.php';

    $errMsg = "";
    $name = $email = $address = $mobileNumber = "";
    
    $user = profile();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flag = false;

        if (empty($_REQUEST['name'])) {
            $errMsg = "{$errMsg} <br />Name is required!";
            $flag = true;
        } else {
            $name = $_REQUEST['name'];
        }

        if (empty($_REQUEST['email'])) {
            $errMsg = "{$errMsg} <br />Email Address is required!";
            $flag = true;
        } else {
            $email = $_REQUEST['email'];
        }

        $address = $_REQUEST['address'];
        $mobileNumber = $_REQUEST['mobile_number'];

        if (!$flag) {
            include '../controllers/profileController.php';
            profileUpdate($name, $address, $email, $mobileNumber);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
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

            <table border="0" width="100%">
              <tr>
                <td width="30%">
                  <ul>
                    <a href="profile.php"><li>Your Profile</li></a>
                  </ul>
                  <ul>
                    <a href="editProfile.php"><li>Edit Profile</li></a>
                  </ul>
                  <ul>
                    <a href="changeProfilePicture.php"><li>Change Profile Picture</li></a>
                  </ul>
                  <ul>
                    <a href="changePassword.php"><li>Change Password</li></a>
                  </ul>
                </td>

                <td width="70%" style="text-align: center;">
                    <form
                    method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                    enctype="multipart/form-data"
                    >
                    <fieldset>
                      <legend>Edit Profile</legend>
                      <br />
                      <img src="<?php  ?>" alt="">
                      <br /><br />
                      <b>Username: </b><span><?=$user[0]['username']?></span>
                      <br /><br />
                      Full Name:
                      <input type="text" name="name" value="<?=$user[0]['name']?>" />
                      <br /><br />
                      Address:
                      <input type="text" name="address" value="<?=$user[0]['address']?>" />
                      <br /><br />
                      Email Address: <input type="email" name="email" value="<?=$user[0]['email']?>" />
                      <br /><br />
                      Mobile Number:
                      <input type="text" name="mobile_number" value="<?=$user[0]['mobileNumber']?>" />
                      <br /><br />
                      <input type="submit" name="submit" value="Submit" />
                      <br /><br />
                    </fieldset>
                    </form>
                </td>
              </tr>
            </table>
            
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>
  </body>
</html>
