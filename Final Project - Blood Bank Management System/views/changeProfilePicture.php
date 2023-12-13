<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/usersModel.php';
    
    $user = profile();
    $errMsg = "";

    if(isset($_FILES["profilePicture"]["name"])){
      $name = $_COOKIE['user'];
      $imageName = $_FILES["profilePicture"]["name"];
      $imageSize = $_FILES["profilePicture"]["size"];
      $tmpName = $_FILES["profilePicture"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        $errMsg = "Invalid image extension!";
      }
      elseif ($imageSize > 5000000){
        $errMsg = "File is too large!";
      }
      else{
        $newImageName = "../uploads/" . $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;

        require_once('../models/db.php');

        $con = getConnection();
        $sql = "UPDATE users SET profilePicture = '$newImageName' WHERE username = '{$_COOKIE['user']}'";
        mysqli_query($con, $sql);
        move_uploaded_file($tmpName, '../uploads/' . $newImageName);

        header('location: changeProfilePicture.php');
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Profile Picture</title>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section class="whitespace">
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>

            <p style="color: red"><?php echo $errMsg;?></p>
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
                    <h2>Change Profile Picture</h2>
                    <br><br>
                    <img src="<?=$user[0]['profilePicture']?>" alt="profile-picture" width="200" height="200">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                      <br><br>
                      <input type="file" name="profilePicture" id="profilePicture">
                      <br><br>
                      <input type="submit" name="submit" value="Change Profile Picture" class="btn-alt form-btn">
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