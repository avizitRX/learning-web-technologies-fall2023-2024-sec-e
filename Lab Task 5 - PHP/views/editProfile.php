<?php
  require_once('../controllers/sessionCheck.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
          <p>Logged in as <?php echo $_SESSION['user']['name']; ?> | </p>
          <a href="../controllers/logout.php">Logout</a>
        </td>
      </tr>
      <tr>
        <td>
          <h3>Account</h3>
          <ul>
            <li><a href="./dashboard.php">Dashboard</a></li>
            <li><a href="./profile.php">View Profile</a></li>
            <li><a href="./editProfile.php">Edit Profile</a></li>
            <li><a href="./changeProfilePicture.php">Change Profile Picture</a></li>
            <li><a href="./changePassword.php">Change Password</a></li>
            <li><a href="../controllers/logout.php">Logout</a></li>
          </ul>
        </td>
        <td>
          <form action="../controllers/editProfile.php">
            <fieldset>
                <legend>Edit Profile</legend>
                Name: <input type="text" name="name" value="<?php echo $_SESSION['user']['name']; ?>" /> <br />
                <hr />
                Email: <input type="email" name="email" value="<?php echo $_SESSION['user']['email']; ?>" /> <br />
                <hr />
                Gender:
                <input type="radio" name="gender" value="Male" <?php echo ($_SESSION['user']['gender']) === 'Male' ? 'checked' : ''; ?>/> Male
                <input type="radio" name="gender" value="Female" <?php echo ($_SESSION['user']['gender']) === 'Female' ? 'checked' : ''; ?>/> Female
                <input type="radio" name="gender" value="Other" <?php echo ($_SESSION['user']['gender']) === 'Other' ? 'checked' : ''; ?>/> Other <br />
                <hr />
                Date of Birth:
                <input type="date" name="dob" value="<?php echo $_SESSION['user']['dob']; ?>"/>
                <span style="margin-left: 10px">(dd/mm/yyyy)</span>
                <br />
                <hr />
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
          </form>
        </td>
      </tr>

      <tr>
        <td colspan="2" style="text-align: center">Copyright © 2017</td>
      </tr>
    </table>
  </body>
</html>
