<?php
  include_once '../controllers/inventoryQuantity.php';
  
  $inventory = inventoryQuantity();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Blood Bank Management System</title>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section>
      <br /><br /><br /><br />
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td width="50%">
            <table border="0" width="100%">
              <tr>
                <td width="40%">
                  <h1 style="font-size: 48px">
                    Donate<br />your Blood<br />for saving life
                  </h1>
                  <?php if(!isset($_COOKIE['flag'])) { ?>
                  <a href="registration.php"><button>REGISTER NOW</button></a>
                  <?php } ?>
                </td>
                <td width="60%" style="text-align: center">
                  <img
                    src="../assets/images/florid-vampire.png"
                    alt="hero-img"
                  />
                </td>
              </tr>
            </table>
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>

    <br /><br /><br /><br />
    
    <section>
      <table border="0" width="100%">
        <tr>
          <td colspan="3" style="text-align: center;">
            <h1>Our Inventory</h1>
          </td>
        </tr>

        <tr>
          <td width="25%">&nbsp;</td>
          <td width="50%">
            <table border="1" width="100%" style="text-align: center;">
              <tr>
                <td width="25%">
                  <img src="../assets/images/A+.png" alt="A+" width="100px" height="150px">
                  <h3><?=$inventory[0]['quantity']?> Bags</h3>
                </td>
                <td width="25%">
                  <img src="../assets/images/A-.png" alt="A-" width="100px" height="150px">
                  <h3><?=$inventory[1]['quantity']?> Bags</h3>
                </td>
                <td width="25%">
                  <img src="../assets/images/B+.png" alt="B+" width="105px" height="150px">
                  <h3><?=$inventory[2]['quantity']?> Bags</h3>
                </td>
                <td width="25%">
                  <img src="../assets/images/B-.png" alt="B-" width="100px" height="150px">
                  <h3><?=$inventory[3]['quantity']?> Bags</h3>
                </td>
              </tr>
              <tr>
                <td width="25%">
                    <img src="../assets/images/O+.png" alt="O+" width="100px" height="150px">
                    <h3><?=$inventory[4]['quantity']?> Bags</h3>
                  </td>
                  <td width="25%">
                    <img src="../assets/images/O-.png" alt="O-" width="100px" height="150px">
                    <h3><?=$inventory[5]['quantity']?> Bags</h3>
                  </td>
                  <td width="25%">
                    <img src="../assets/images/AB+.png" alt="AB+" width="100px" height="150px">
                    <h3><?=$inventory[6]['quantity']?> Bags</h3>
                  </td>
                  <td width="25%">
                    <img src="../assets/images/AB-.png" alt="AB-" width="110px" height="150px">
                    <h3><?=$inventory[7]['quantity']?> Bags</h3>
                  </td>
              </tr>
            </table>
          </td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
    </section>
    <br /><br /><br /><br /><br />
  </body>
</html>