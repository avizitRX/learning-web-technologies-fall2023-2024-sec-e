<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include_once 'header.php'; ?>
    <br><br>
    <table width="100%">
        <tr>
            <td width="30%"></td>
            <td>
            <span class="blood-group-selected" id="selectedBloodGroupDisplay">Selected Blood Group: </span>

            <div class="blood-bag-container">
                <div class="main-blood-bag">
                    <select id="bloodGroupSelector" onchange="updateBloodBag(this.value)">
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                <div class="blood-bags">
                    <div class="blood-bag box-color" data-blood-group="A+">A+</div>
                    <div class="blood-bag box-color" data-blood-group="B+">B+</div>
                    <div class="blood-bag box-color" data-blood-group="AB+">AB+</div>
                    <div class="blood-bag box-color" data-blood-group="O+">O+</div>
                    <div class="blood-bag box-color" data-blood-group="A-">A-</div>
                    <div class="blood-bag box-color" data-blood-group="B-">B-</div>
                    <div class="blood-bag box-color" data-blood-group="AB-">AB-</div>
                    <div class="blood-bag box-color" data-blood-group="O-">O-</div>
                </div>
            </div>
            </td>
            <td width="30%"></td>
        </tr>
    </table>
        
    <script src="../assets/js/script.js"></script>
</body>

</html>
