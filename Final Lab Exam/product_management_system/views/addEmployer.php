<?php
    require_once '../controllers/adminSessionCheck.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $password2 = $_REQUEST['password2'];
        $name = $_REQUEST['name'];
        $company = $_REQUEST['company'];
        $contactNumber = $_REQUEST['contactNumber'];
        
        include_once '../controllers/addEmployerController.php';
        $errMsg = addEmployer($username, $password, $password2, $name, $company, $contactNumber);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Employer</title>
  </head>
  <body>
    <?php include_once 'adminHeader.php';?>

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
                <legend><h3>Add Employer</h3></legend>
                Username: <input type="text" name="username" value="" />
                <br /><br />
                Password:
                <input type="password" name="password" value="" />
                <br /><br />
                Confirm Password:
                <input type="password" name="password2" value="" />
                <br /><br />
                Full Name:
                <input type="text" name="name" value="" />
                <br /><br />
                Company:
                <input type="text" name="company" value="" />
                <br /><br />
                Contact Number:
                <input type="text" name="contactNumber" value="" />
                <br /><br />
                <input type="submit" name="submit" value="Add Employer" />
                <br /><br />
              </fieldset>
            </form>
          </td>
          <td width="35%"></td>
        </tr>
      </table>
    </section>
  </body>
</html>