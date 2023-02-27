<?php



?>
<html>

<head>
<style>

*{
	margin:0px; padding:0px;
}
#outer{
			background-image:url('images/backdrop-background-orange-132197.jpg');
	background-size:100% 100%;
	height:100vh;
	width:100%
	background-image:fixed; margin-top:-10px;
}
#head{
	height:90px; width:40%;
	background-color:orange; font-family:arial; font-size:35px;
	line-height:90px;
}
#head2{
	height:300px; width:40%; background-color:#C4F298; margin-top:10px;
}

</style>

</head>


<body>

<div id="outer">
<?php
include("usermenu.php");
?>
<center><div id="head">
<b>Update Your Password</b>
</div></center>
<center>
<div id="head2">
<br/><br/>
<form action="changepasscode.php" method="post">
<p style="margin-left:80px;"><b>
Old Password :</b>
<input type="text"name="op" style="margin-left:75px;"/>
<br/></p>

<p style="margin-left:80px; margin-left:70px;"><b>
New Password :</b>
<input type="text" name="np" style="margin-left:80px;"/>
<br/></p>

<p style="margin-left:80px;"><b>
Confirm New password :</b>
<input type="text" name="cp" style="margin-left:15px;"/>
<br/></p>
<br/><br/>

<center><input type="submit" value="Change Password" style="height:50px; width:270px;border:none; outline:none; background-color:orange; border-radius:5px;"/></center>


</form>
</div></center>



</div>

</body>
</html>