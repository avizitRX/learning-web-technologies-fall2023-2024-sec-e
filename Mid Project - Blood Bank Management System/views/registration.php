<?php
    if(isset($_COOKIE['flag'])) {
      header('location: dashboard.php');
    }
    
    $errMsg = "";
    $username = $password = $password2 = $name = $email = $address = $mobileNumber = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flag = false;
        $pattern = "^[^0-9a-zA-Z-_]([-_].*|)$";

        if (empty($_REQUEST['username'])) {
            $errMsg = "{$errMsg} <br />Username is required!";
            $flag = true;
        } 
        // else if (preg_match($pattern, $_REQUEST['username']) == 0) {
        //   $errMsg = "{$errMsg} <br />Username can't start with a number, only '-' and '_' are allowed!";
        //   $flag = true;
        // }
        else {
            $username = $_REQUEST['username'];
        }

        if (empty($_REQUEST['password'])) {
            $errMsg = "{$errMsg} <br />Password is required!";
            $flag = true;
        } else if ($_REQUEST['password'] != $_REQUEST['password2']) {
            $errMsg = "{$errMsg} <br />Password didn't match!";
            $flag = true;
        } else {
            $password = $_REQUEST['password'];
            $password2 = $_REQUEST['password2'];
        }

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
            include '../controllers/registrationController.php';
            register($username, $password, $name, $address, $email, $mobileNumber);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section>
      <table border="0" width="100%" >
        <tr>
          <td width="35%"></td>
          <td>
            <p style="color: red"><?php echo $errMsg;?></p>
            <br />
            <form
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="multipart/form-data"
            >
              <fieldset>
                <legend><h3>Registration</h3></legend>
                <br />
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
                <input type="submit" name="submit" value="Submit" />
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
