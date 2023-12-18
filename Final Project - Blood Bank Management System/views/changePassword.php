<?php
    require_once '../controllers/sessionCheck.php';
    include_once 'header.php';

    $msg = "";
    $oldPassword = $password = $password2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once '../controllers/changePasswordController.php';

        $oldPassword = $_REQUEST["oldPassword"];
        $password = $_REQUEST["password"];
        $password2 = $_REQUEST["password2"];

        $msg = changePassword($oldPassword, $password, $password2);
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
    <section class="whitespace">
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>
            <p style="color: red"><?php echo $msg;?></p>
            <br />

            <table border="0" width="100%">
              <tr>
                <td width="30%">
                <div class="update-profile">
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
                </div>
                </td>

                <td width="70%" style="text-align: center">
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="" onsubmit="changePasswordScript()">
                      <h2>Change Password</h2>
                      <br><br>
                      Old Password:
                      <input type="password" name="oldPassword" id="oldPassword" value=""  placeholder="Enter your old password again."/>
                      <br /><br />
                      New Password:
                      <input type="password" name="password" id="password" value="" placeholder="First letter must be Uppurcase, lenght more than 8, one special character, one integer."/>
                      <br /><br />
                      Confirm New Password:
                      <input type="password" name="password2" id="password2" value="" placeholder="Enter your new password again."/>
                      <br /><br />
                      <input
                        type="submit"
                        name="submit"
                        value="Change Password"
                        class="btn-alt form-btn"
                      />
                  </form>
                </td>
              </tr>
            </table>
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>
    <?php include_once 'footer.php';?>
  </body>
</html>
