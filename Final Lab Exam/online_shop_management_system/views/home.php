<?php
    session_start();
    if(!isset($_COOKIE['flag'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php include_once 'header.php';?>

    <section>
        <table border="0" width="100%">
          <tr>
            <td width="25%"></td>
            <td>
              <br />
                <fieldset>
                  <legend>Find Employee</legend>
                  <br />
                  Employee Name:
                  <input type="text" name="name" value="" id="name" />
                  <br /><br />
                  Employee Username:
                  <input type="text" name="username" value="" id="username" />
                  <br /><br />
                  <input type="submit" name="submit" value="Search" onclick="searchEmployee()" />
                  <br /><br />
                </fieldset>
            </td>
            <td width="25%"></td>
          </tr>
        </table>
      </section>
  
      <section>
        <br><br>
        <table border="0" width="100%">
          <tr>
            <td width="25%"></td>
            <td>
                <table border="1" width="100%" id="result">
    
                </table>
            </td>
            <td width="25%"></td>
          </tr>
        </table>
      </section>
</body>
</html>