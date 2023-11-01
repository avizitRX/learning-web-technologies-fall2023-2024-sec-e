<?php
	include_once("../controllers/permission_check.php");
	include_once("../controllers/userData.php");
?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?php echo $_SESSION['user']['id']; ?></tr>
		<tr><td>NAME</td><td><?php echo $_SESSION['user']['name']; ?></td></tr>	
		<tr><td>USER TYPE</td><td><?php echo $_SESSION['user']['userType']; ?></td></tr>
		<tr><td colspan="2" align="right"><a href="user_home.php">Go Home</a></td></tr>
	</table>			
</center>