<?php
    require_once '../controllers/sessionCheck.php';
    include_once 'header.php';
    include_once '../models/usersModel.php';

    $errMsg = "";
    $name = $email = $address = $mobileNumber = "";
    
    $user = profile();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flag = false;

        // if (empty($_REQUEST['username'])) {
        //     $errMsg = "{$errMsg} <br />Username is required!";
        //     $flag = true;
        // } else {
        //     $username = $_REQUEST['username'];
        // }

        // if (empty($_REQUEST['password'])) {
        //     $errMsg = "{$errMsg} <br />Password is required!";
        //     $flag = true;
        // } else if ($_REQUEST['password'] != $_REQUEST['password2']) {
        //     $errMsg = "{$errMsg} <br />Password didn't match!";
        //     $flag = true;
        // } else {
        //     $password = $_REQUEST['password'];
        //     $password2 = $_REQUEST['password2'];
        // }

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

        // if (empty($_REQUEST['profilePicture'])) {
        //   $profilePicture = 
        // } else {
        //   $file = $_FILES["profilePicture"];
        //   $fileName = $file["name"];
        //   $tmpName = $file["tmp_name"];

        //   $profilePicture = file_get_contents($tmpName);
        // }

        // if(empty($_FILES["profilePicture"]["name"])) {
        //   $profilePicture = "../assets/images/avatar.jpg";
        // } else {
        //   $profilePicture = $_FILES["profilePicture"]["name"];
        // }

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
    <title>Profile</title>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section class="whitespace">
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td>
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
                    <form
                    method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                    enctype="multipart/form-data"
                    >
                        <br />
                        <img src="<?=$user[0]['profilePicture']?>" alt="profile-picture" width="200" height="200">
                        <br /><br />
                        <b>Username: </b><span><?=$user[0]['username']?></span>
                        <br /><br />
                        <b>Full Name: </b><span><?=$user[0]['name']?></span>
                        <br /><br />
                        <b>Role: </b><span><?=$user[0]['role']?></span>
                        <br /><br />
                        <b>Address: </b><span><?=$user[0]['address']?></span>
                        <br /><br />
                        <b>Email Address: </b><span><?=$user[0]['email']?></span>
                        <br /><br />
                        <b>Mobile Number: </b><span><?=$user[0]['mobileNumber']?></span>
                        <br /><br />
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
