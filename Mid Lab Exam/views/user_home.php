<?php
	include_once("../controllers/permission_check.php");
	include_once("../controllers/userData.php");
?>

<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="logout.html">Logout</a>
</center>