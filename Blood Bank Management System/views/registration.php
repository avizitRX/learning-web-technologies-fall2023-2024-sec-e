<?php
  if(isset($_COOKIE['flag'])) {
    header('location: dashboard.php');
  }

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

    $msg = register($role, $username, $password, $password2, $name, $address, $email, $mobileNumber);
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

    <section>
      <table border="0" width="100%" >
        <tr>
          <td width="35%"></td>
          <td>
            <p style="color: red"><?php echo $msg;?></p>
            <br />
            <form
              name="registration"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
              onsubmit="register()"
            >
              <fieldset>
                <legend><h3>Registration</h3></legend>
                <br />
                Role: <input type="radio" name="role" id="recipient" value="recipient"> Recipient</input>
                <input type="radio" name="role" id="donor" value="donor"> Donor</input>
                <input type="radio" name="role" id="staff" value="staff"> Staff</input>
                <br><br>
                Username: <input type="text" name="username" value="<?php echo $username;?>" />
                <br /><br />
                Password:
                <input type="password" name="password" value="<?php echo $password;?>" />
                <br /><br />
                Confirm Password:
                <input type="password" name="password2" value="<?php echo $password2;?>" />
                <br /><br />
                Full Name:
                <input type="text" name="name" value="<?php echo $name;?>" />
                <br /><br />
                Address:
                <input type="text" name="address" value="<?php echo $address;?>" />
                <br /><br />
                Email Address: <input type="email" name="email" value="<?php echo $email;?>" />
                <br /><br />
                Mobile Number:
                <input type="text" name="mobile_number" value="<?php echo $mobileNumber;?>" />
                <br /><br />
                <!-- <input type="file" name="profilePicture" accept="image/*">
                <br /><br /> -->
                <input type="submit" name="submit" value="Submit"/>
                <p>Already have an account? <a href="login.php">Login</a></p>
              </fieldset>
            </form>
          </td>
          <td width="35%"></td>
        </tr>
      </table>
    </section>
  </body>
</html>
