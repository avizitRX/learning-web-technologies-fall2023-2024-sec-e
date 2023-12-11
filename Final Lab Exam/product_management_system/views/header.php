<section>
      <table border="0" width="100%">
        <tr>
          <br /><br />
          <div style="text-align: center">
          <?php if (isset($_COOKIE['adminFlag'])) { ?>
            <a href="adminPanel.php">Home</a>
          <?php } ?>
          <?php if (isset($_COOKIE['sellerFlag'])) { ?>
            <a href="sellerPanel.php">Home</a>
          <?php } ?>
          <?php if (isset($_COOKIE['buyerFlag'])) { ?>
            <a href="buyerPanel.php">Home</a>
          <?php } ?>
            &nbsp;&nbsp;
            <a href="allProducts.php">All Products</a>
            &nbsp;&nbsp;
            <?php if (isset($_COOKIE['sellerFlag'])) { ?>
              <a href="addProduct.php">Add Product</a>
            <?php } ?>
            <!-- &nbsp;&nbsp;
            <a href="#">Contact Us</a> -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php if(!isset($_COOKIE['flag'])) { ?>
              <a href="login.php">Login</a>
            <?php } else { ?>
              <a href="../controllers/logout.php">Logout</a>
            <?php } ?>
          </div>
          <br /><br />
        </tr>
      </table>
    </section>