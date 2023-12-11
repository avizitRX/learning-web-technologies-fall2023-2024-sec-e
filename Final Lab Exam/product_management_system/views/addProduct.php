<?php
    // require_once '../controllers/adminSessionCheck.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $quantity = $_REQUEST['quantity'];
        
        include_once '../controllers/addProductController.php';
        $errMsg = addProduct($name, $price, $quantity);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product</title>
  </head>
  <body>
    <?php include_once 'header.php';?>

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
                <legend><h3>Add Product</h3></legend>
                Name:
                <input type="text" name="name" value="" />
                <br /><br />
                Price:
                <input type="text" name="price" value="" />
                <br /><br />
                Qunatity Available:
                <input type="text" name="quantity" value="" />
                <br /><br />
                <input type="submit" name="submit" value="Add Product" />
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