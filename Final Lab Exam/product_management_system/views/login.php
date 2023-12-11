<?php
    if(isset($_COOKIE['adminFlag'])) {
      header('location: adminPanel.php');
    }

    if(isset($_COOKIE['employerFlag'])) {
      header('location: employerPanel.php');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $role = $_REQUEST['role'];
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      include_once '../controllers/loginController.php';
      $result = loginControl($role, $username, $password);

      if ($result === 'admin') {
        header('location: ../views/adminPanel.php');
      } else if ($result === 'buyer') {
        header('location: ../views/buyerPanel.php');
      } else if ($result === 'seller') {
        header('location: ../views/sellerPanel.php');
      } else {
        $errMsg = $result;
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <section>
      <table border="0" width="100%">
        <tr>
          <td width="40%"></td>
          <td style="text-align: center;">
            <p style="color: red"><?php echo $errMsg;?></p>
            <br />
            <form
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype="">
              <fieldset>
                <legend><h3>Login</h3></legend>
                <br />
                <b>User Role: </b>
                <input type="radio" name="role" id="role" value="admin" <?php echo $role=="admin" ? "checked" : "";?>> Admin
                <input type="radio" name="role" id="role" value="seller" <?php echo $role=="seller" ? "checked" : "";?>> Seller
                <input type="radio" name="role" id="role" value="buyer" <?php echo $role=="buyer" ? "checked" : "";?>> Buyer
                <br /><br />
                <b>Username: </b>
                <input type="text" name="username" id="username" value="<?php echo $username;?>" />
                <br /><br />
                <b>Password: </b>
                <input type="password" name="password" id="password" value="<?php echo $password;?>" />
                <br /><br />
                <input type="submit" name="submit" value="Login" onclick="login()"/>
                <br /><br />
              </fieldset>
            </form>
          </td>
          <td width="40%"></td>
        </tr>
      </table>
    </section>
  </body>
</html>
