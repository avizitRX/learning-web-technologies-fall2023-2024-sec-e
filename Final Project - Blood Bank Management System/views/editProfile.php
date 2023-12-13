<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/usersModel.php';

    $user = profile();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section class="whitespace">
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>

            <p id="msg" style="color: red"></p>
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
                    <a href="changeProfilePicture.php"><li>Change Profile Picture</li></a>
                  </ul>
                  <ul>
                    <a href="changePassword.php"><li>Change Password</li></a>
                  </ul>
                  </div>
                </td>

                <td width="70%" style="text-align: center;">
                        <h2>Edit Profile</h2>
                      <br />
                      <img src="<?php  ?>" alt="">
                      <br /><br />
                      <b>Username: </b><span><?=$user[0]['username']?></span>
                      <br /><br />
                      Full Name:
                      <input type="text" name="name" id="name" value="<?=$user[0]['name']?>" />
                      <br /><br />
                      <?php if ($_SESSION['user']['role'] == "Donor") { ?>
                      Age:
                      <input type="text" name="age" id="age" value="<?=$user[0]['age']?>" />
                      <br /><br />

                      Gender:
                      <select id="gender" name="gender" value="<?=$user[0]['gender']?>">
                        <option value="Male" <?php if($user[0]['gender'] == 'Male') echo "selected"; ?>>Male</option>
                        <option value="Female" <?php if($user[0]['gender'] == 'Female') echo "selected"; ?>>Female</option>
                      </select>
                      <br /><br />

                      Availability:
                      <select id="availability" name="availability">
                        <option value="Available" <?php if($user[0]['availability'] == 'Available') echo "selected"; ?>>Available</option>
                        <option value="Not Available" <?php if($user[0]['availability'] == 'Not Available') echo "selected"; ?>>Not Available</option>
                      </select>
                      <br /><br />
                      <?php } ?>
                      Address:
                      <input type="text" name="address" id="address" value="<?=$user[0]['address']?>" />
                      <br /><br />
                      Email Address: <input type="email" name="email" id="email" value="<?=$user[0]['email']?>" />
                      <br /><br />
                      Mobile Number:
                      <input type="text" name="mobile_number" id="mobileNumber" value="<?=$user[0]['mobileNumber']?>" />
                      <br /><br />
                      <input type="button" name="submit" value="Save" onclick="editProfile()" class="btn-alt form-btn" />
                      <br /><br />
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
