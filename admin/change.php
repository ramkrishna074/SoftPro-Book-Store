<?php
session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}



?>
<form action="changecode.php" method="post">

Old Password
<input type="text"name="op"/>
<br/>
New Password
<input type="text" name="np"/>
<br/>
Confirm New password
<input type="text" name="cp"/>
<br/>
<input type="submit" value="Change Password"/>


</form>