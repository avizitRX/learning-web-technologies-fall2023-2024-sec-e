<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">

<header>
      <table border="0" width="100%">
        <tr>
          <br /><br />
          <div class="header-text" style="text-align: center">
            <a href="home.php">Home</a>
            
            &nbsp;&nbsp;
            <a href="requestBlood.php">Request Blood</a>
            
            &nbsp;&nbsp;
            <a href="findDonor.php">Find Donor</a>
            
            &nbsp;&nbsp;
            <?php if(isset($_COOKIE['staffFlag'])) { ?>
              <a href="addBlood.php">Add Blood</a>
            <?php } ?>

            &nbsp;&nbsp;
            <?php if(isset($_COOKIE['staffFlag'])) { ?>
              <a href="bloodInventory.php">Blood Inventory</a>
            <?php } ?>
            &nbsp;&nbsp;&nbsp;
            <a href="bloodFlow.php">Blood Flowing</a>

            <!-- &nbsp;&nbsp;
            <a href="#">Contact Us</a> -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php if(!isset($_COOKIE['user'])) { ?>
              <a href="login.php" class="login-btn">Login</a>
              &nbsp;&nbsp;
              <a href="registration.php" class="btn">Registration</a>
            <?php } else { ?>
              
              <?php if (isset($_COOKIE['recipientFlag'])) { ?>
                <a href="recipientPanel.php">Dashboard</a>
              <?php } ?>

              <?php if (isset($_COOKIE['staffFlag'])) { ?>
                <a href="staffPanel.php">Dashboard</a>
              <?php } ?>

              <?php if (isset($_COOKIE['donorFlag'])) { ?>
                <a href="donorPanel.php">Dashboard</a>
              <?php } ?>

              &nbsp;&nbsp;
              <a href="profile.php">Profile</a>
              &nbsp;&nbsp;
              <a href="../controllers/logout.php">Logout</a>
            <?php } ?>
          </div>
          <br /><br />
        </tr>
      </table>
</header>