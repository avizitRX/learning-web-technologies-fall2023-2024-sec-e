<?php
  // include_once '../controllers/inventoryQuantity.php';
  
  // $inventory = inventoryQuantity();

  include_once '../models/inventoryModel.php';

  $Apos = bloodQuantity('A+');
  $Bpos = bloodQuantity('B+');
  $Opos = bloodQuantity('O+');
  $ABpos = bloodQuantity('AB+');
  $Aneg = bloodQuantity('A-');
  $Bneg = bloodQuantity('B-');
  $Oneg = bloodQuantity('O-');
  $ABneg = bloodQuantity('AB-');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Blood Bank Management System</title>
    <link rel="stylesheet" href="../assets/css/home_style.css">
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
                    <br><br>
                  <a href="registration.php" class="btn">REGISTER NOW</a>
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
            <h1 class="our-inventory-heading">Our Inventory</h1>
          </td>
        </tr>

        <tr>
          <td width="25%">&nbsp;</td>
          <td width="50%">
            <table class="home-table">
              <tr>
                <td width="25%">
                  <img src="../assets/images/A+.png" alt="A+" width="100px" height="150px">
                  <h3><?=$Apos[0]['SUM(quantity)']?> Bags</h3>
                </td>
                <td width="25%">
                  <img src="../assets/images/A-.png" alt="A-" width="100px" height="150px">
                  <h3><?=$Aneg[0]['SUM(quantity)']?> Bags</h3>
                </td>
                <td width="25%">
                  <img src="../assets/images/B+.png" alt="B+" width="105px" height="150px">
                  <h3><?=$Bpos[0]['SUM(quantity)']?> Bags</h3>
                </td>
                <td width="25%">
                  <img src="../assets/images/B-.png" alt="B-" width="100px" height="150px">
                  <h3><?=$Bneg[0]['SUM(quantity)']?> Bags</h3>
                </td>
              </tr>
              <tr>
                <td class="card" width="25%">
                    <img src="../assets/images/O+.png" alt="O+" width="100px" height="150px">
                    <h3><?=$Opos[0]['SUM(quantity)']?> Bags</h3>
                  </td>
                  <td width="25%">
                    <img src="../assets/images/O-.png" alt="O-" width="100px" height="150px">
                    <h3><?=$Oneg[0]['SUM(quantity)']?> Bags</h3>
                  </td>
                  <td width="25%">
                    <img src="../assets/images/AB+.png" alt="AB+" width="100px" height="150px">
                    <h3><?=$ABpos[0]['SUM(quantity)']?> Bags</h3>
                  </td>
                  <td width="25%">
                    <img src="../assets/images/AB-.png" alt="AB-" width="110px" height="150px">
                    <h3><?=$ABneg[0]['SUM(quantity)']?> Bags</h3>
                  </td>
              </tr>
            </table>
          </td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
    </section>
    <br /><br /><br /><br /><br />
    <?php include_once 'footer.php';?>
  </body>
</html>