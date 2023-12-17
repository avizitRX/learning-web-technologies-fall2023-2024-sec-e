<?php
    if(isset($_COOKIE['user'])) {
      header('location: home.php');
    }

    $msg = $username = $password = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include_once '../controllers/loginController.php';

      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];
  
      $msg = loginControl($username, $password);
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
    <?php include_once 'header.php';?>

    <div class="heading">
      <h2>Login</h2>
    </div>

    <section class="whitespace">
      <table border="0" width="100%">
        <tr>
          <td width="40%"></td>
          <td>
            <p style="color: red"><?php echo $msg;?></p>
            <br />
            <form
              name="login"
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype=""
              onsubmit="loginVD()"
            >
                <br />
                Username: <input type="text" name="username" value="<?php echo $username;?>" />
                <br />
                Password:
                <input type="password" name="password" value="<?php echo $password;?>" />
                <br />
                <input type="submit" name="submit" value="Login" class="btn form-btn" />
                <br><br>
                <p>Don't have an account? <a href="registration.php">Register Now</a></p>
                <br />
            </form>
          </td>
          <td width="40%"></td>
        </tr>
      </table>
    </section>

    <?php include_once 'footer.php';?>
  </body>
</html>
