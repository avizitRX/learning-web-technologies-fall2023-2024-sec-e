<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/requestBloodModel.php';
    include_once '../controllers/addRequestBloodController.php';
    
    $msg = $bloodGroup = $location = $date = $mobileNumber = $comment = "";
    $requestBlood = viewRequestBlood($_COOKIE['user']);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $bloodGroup = $_REQUEST['bloodGroup'];
      $location = $_REQUEST['location'];
      $date = $_REQUEST['date'];
      $mobileNumber = $_REQUEST['mobileNumber'];
      $comment = $_REQUEST['comment'];
      $owner = $_COOKIE['user'];
      
      $msg = addRequestBlood($bloodGroup, $location, $date, $mobileNumber, $comment, $owner);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Blood</title>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php include_once 'header.php';?>

    <section>
      <div class="heading">
        <h2>Request Blood</h2>
      </div>
      <table border="0" width="100%" class="custom-select">
        <tr>
          <td width="25%"></td>
          <td>
            <p style="color: red"><?php echo $msg;?></p>
            <br />
            <form
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
              enctype=""
              onsubmit="requestBlood()"
            >
                <br />
                Blood Group: <select name="bloodGroup" id="bloodGroup" value="<?php echo $bloodGroup;?>">
                    <option value="" <?php if (isset($bloodGroup) && $bloodGroup=="") echo "selected";?>>-</option>
                    <option value="A+" <?php if (isset($bloodGroup) && $bloodGroup=="A+") echo "selected";?>>A+</option>
                    <option value="A-"<?php if (isset($bloodGroup) && $bloodGroup=="A-") echo "selected";?>>A-</option>
                    <option value="B+"<?php if (isset($bloodGroup) && $bloodGroup=="B+") echo "selected";?>>B+</option>
                    <option value="B-"<?php if (isset($bloodGroup) && $bloodGroup=="B-") echo "selected";?>>B-</option>
                    <option value="O+"<?php if (isset($bloodGroup) && $bloodGroup=="O+") echo "selected";?>>O+</option>
                    <option value="O-"<?php if (isset($bloodGroup) && $bloodGroup=="O-") echo "selected";?>>O-</option>
                    <option value="AB+"<?php if (isset($bloodGroup) && $bloodGroup=="AB+") echo "selected";?>>AB+</option>
                    <option value="AB-"<?php if (isset($bloodGroup) && $bloodGroup=="AB-") echo "selected";?>>AB-</option>
                </select>
                <br /><br />
                Location:
                <input type="text" name="location" id="location" value="<?php echo $location;?>" />
                <br /><br />
                Date:
                <input type="date" name="date" id="date" value="<?php echo $date;?>" />
                <br /><br />
                Mobile Number:
                <input type="text" name="mobileNumber" id="mobileNumber" value="<?php echo $mobileNumber;?>" />
                <br /><br />
                Comment:
                <textarea name="comment" id="comment" cols="30" rows="10">
                    <?php echo $comment;?>
                </textarea>
                <br /><br />
                <input type="submit" name="submit" value="Submit" class="btn-alt form-btn" />
                <br /><br />
            </form>
          </td>
          <td width="25%"></td>
        </tr>
      </table>
    </section>

    <br /><br />
    <h2 style="text-align:center">Your Posts</h2>

    <section>
      <br>
      <table border="0" width="100%">
        <tr>
          <td width="25%">&nbsp;</td>
          <td>
          <?php for($i = 0; $i < count($requestBlood); $i++) { ?>
            <table border="0" width="100%">
                <tr>
                    <td colspan="2"><br /><?=$requestBlood[$i]['comment']?></td>
                </tr>
                <tr>
                    <td>
                        <br />
                    </td>
                </tr>
                <tr>
                    <td><b>Blood Group: </b><?=$requestBlood[$i]['bloodGroup']?></td>
                    <td style="text-align: right;"><b>Location: </b><?=$requestBlood[$i]['location']?></td>
                </tr>

                <tr>
                    <td><b>Date: </b><?=$requestBlood[$i]['date']?></td>
                    <td style="text-align: right;"><b>Contact: </b><a href="tel:<?=$requestBlood[$i]['mobileNumber']?>"><?=$requestBlood[$i]['mobileNumber']?></a></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <br>
                        <a href="editRequestBlood.php?id=<?=$requestBlood[$i]['id']?>"><button class="dlt-btn">Edit</button></a>&nbsp;
                        <a href="../controllers/deleteRequestBloodController.php?id=<?=$requestBlood[$i]['id']?>"><button class="dlt-btn">Delete</button></a>
                        <br /><br />
                    </td>
                </tr>
            </table>
            <hr />
            <?php } ?>
        </td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
    </section>
    <?php include_once 'footer.php';?>
</body>
</html>