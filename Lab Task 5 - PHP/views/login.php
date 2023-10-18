<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <table
      border="1"
      cellspacing="0"
      cellpadding="5"
      style="width: 100%; height: 500px"
    >
      <tr>
        <td>xCompany</td>
        <td style="text-align: right">
            <a href="home.php">Home</a> | 
            <a href="login.php">Login</a> | 
            <a href="registration.html">Registration</a>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="padding: 0 30%">
        <form method="post" action="../controllers/loginCheck.php" enctype="">
            <fieldset>
                <legend>Login</legend>
                Username: <input type="text" name="username" value="" /><br> <br>
                Password: <input type="password" name="password" value="" /><br>
                <label for="remember"></label>
                <input type="checkbox" name="remember" id="remember" />Remember me:<br />
                <hr />
                <input type="submit" name="submit" value="Submit" />
                <a href="#">Forgot Password?</a>
            </fieldset>
        </form>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center">Copyright © 2017</td>
      </tr>
    </table>
  </body>
</html>
