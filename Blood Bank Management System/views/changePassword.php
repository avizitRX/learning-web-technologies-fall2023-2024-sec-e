<?php
    require_once '../controllers/sessionCheck.php';
    include_once 'header.php';

    $errMsg = "";
    $oldPassword = $password = $password2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flag = false;

        if (empty($_REQUEST['oldPassword'])) {
            $errMsg = "{$errMsg} <br />Old is required!";
            $flag = true;
        } else {
            $oldPassword = $_REQUEST['oldPassword'];
        }

        if (empty($_REQUEST['password'])) {
            $errMsg = "{$errMsg} <br />New Password is required!";
            $flag = true;
        } else {
            $password = $_REQUEST['password'];
        }

        if (empty($_REQUEST['password2'])) {
            $errMsg = "{$errMsg} <br />Please confirm New Password!";
            $flag = true;
        } else if (!($_REQUEST['password'] == $_REQUEST['password2'])) {
            $errMsg = "{$errMsg}<br />New Password didn't match!";
            $flag = true;
        } else {
            $password = $_REQUEST['password'];
        }

        if (!$flag) {
            include_once '../models/userModel.php';
            $result = changePassword($oldPassword, $password);
            
            if ($result) {
                $errMsg ="Password Changed Successfully!";
            } else {
                $errMsg = "Failed!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
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
                    <a href="changeProfilePicture.php"
                      ><li>Change Profile Picture</li></a
                    >
                  </ul>
                  <ul>
                    <a href="changePassword.php"><li>Change Password</li></a>
                  </ul>
                </td>

                <td width="70%" style="text-align: center">
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="">
                    <fieldset>
                      <legend>Change Password</legend>

                      Old Password:
                      <input type="password" name="oldPassword" id="oldPassword" value="" />
                      <br /><br />
                      New Password:
                      <input type="password" name="password" id="password" value="" />
                      <br /><br />
                      Confirm New Password:
                      <input type="password" name="password2" id="password2" value="" />
                      <br /><br />
                      <input
                        type="submit"
                        name="submit"
                        value="Change Password"
                        onclick="changePassword()"
                      />
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
