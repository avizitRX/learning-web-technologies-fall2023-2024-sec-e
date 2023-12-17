<?php
  if(isset($_COOKIE['user'])) {
    header('location: home.php');
  }

  $msg = $role = $username = $password = $password2 = $name = $email = $address = $mobileNumber = $bloodGroup = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../controllers/registrationController.php';

    $role = $_REQUEST['role'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['password2'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $mobileNumber = $_REQUEST['mobile_number'];
    $bloodGroup = $_REQUEST['bloodGroup'];

    $msg = register($role, $username, $password, $password2, $name, $bloodGroup, $address, $email, $mobileNumber);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <div class="heading">
      <h2>Registraion</h2>
    </div>
    <section>
      <table border="0" width="100%" >
        <tr>
          <td width="35%"></td>
          <td>
            <p style="color: red"><?php echo $msg;?></p>
            <form
              name="registration"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
              onsubmit="register()"
            >
                <br />
                <label for="role">Role</label>
                <input type="radio" name="role" id="recipient" value="Recipient"> Recipient</input>
                <input type="radio" name="role" id="donor" value="Donor"> Donor</input>
                <!-- <input type="radio" name="role" id="staff" value="Staff"> Staff</input> -->
                <br><br>
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo $username;?>" />
                <br />
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo $password;?>" />
                <br />
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" value="<?php echo $password2;?>" />
                <br />
                <label for="name">Full Name</label>
                <input type="text" name="name" value="<?php echo $name;?>" />
                <br />
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo $address;?>" />
                <br />
                <label for="bloodGroup">Blood Group</label>
                <select name="bloodGroup" id="bloodGroup" value="<?php echo $bloodGroup; ?>">
              <option value="--" <?php if (isset($blood) && $blood == "A+")
                echo "selected"; ?>>--</option>
              <option value="A+" <?php if (isset($blood) && $blood == "A+")
                echo "selected"; ?>>A+</option>
              <option value="A-" <?php if (isset($blood) && $blood == "A-")
                echo "selected"; ?>>A-</option>
              <option value="B+" <?php if (isset($blood) && $blood == "B+")
                echo "selected"; ?>>B+</option>
              <option value="B-" <?php if (isset($blood) && $blood == "B-")
                echo "selected"; ?>>B-</option>
              <option value="O+" <?php if (isset($blood) && $blood == "O+")
                echo "selected"; ?>>O+</option>
              <option value="O-" <?php if (isset($blood) && $blood == "O-")
                echo "selected"; ?>>O-</option>
              <option value="AB+" <?php if (isset($blood) && $blood == "AB+")
                echo "selected"; ?>>AB+
              </option>
              <option value="AB-" <?php if (isset($blood) && $blood == "AB-")
                echo "selected"; ?>>AB-
              </option>
            </select> <br>
                <br />
                <label for="email">Email Address</label>
                <input type="email" name="email" value="<?php echo $email;?>" />
                <br />
                <label for="mobile_number">Mobile Number</label>
                <input type="text" name="mobile_number" value="<?php echo $mobileNumber;?>" />
                <br />
                <!-- <input type="file" name="profilePicture" accept="image/*">
                <br /><br /> -->
                <input type="submit" name="submit" value="Submit" class="btn form-btn"/>
                <br><br>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
          </td>
          <td width="35%"></td>
        </tr>
      </table>
    </section>

    <?php include_once 'footer.php';?>
  </body>
</html>
