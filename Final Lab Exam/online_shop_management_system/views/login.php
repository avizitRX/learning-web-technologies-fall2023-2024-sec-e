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

    <section>
      <table border="0" width="100%">
        <tr>
          <td width="30%"></td>
          <td style="text-align: center;">
            <p id="msg"></p>
            <br />
              <fieldset>
                <legend><h3>Login</h3></legend>
                <br />
                Username: <input type="text" name="username" id="username" value="" />
                <br /><br />
                Password:
                <input type="password" name="password" id="password" value="" />
                <br /><br />
                <input type="submit" name="submit" value="Login" onclick="login()" />
                <p>Don't have an account? <a href="registration.php">Register Now</a></p>
                <br />
              </fieldset>
          </td>
          <td width="30%"></td>
        </tr>
      </table>
    </section>
  </body>
</html>