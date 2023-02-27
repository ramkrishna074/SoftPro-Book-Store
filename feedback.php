<?php


?>



<html>


<head>
<style>

#outer{
	height:100vh;
	width:100%;
	background-color:#c0b6a0;
	margin-top:-10px;
}
#head1{
	height:100px; width:50%; background-color:orange; 
	line-height:100px; margin-top:-20px;
}
#head2{
	height:300px;width:70%; background-color:orange;
	margin-top:5px;
}
#submitd{
	height:100px; width:35%; margin-bottom:0px; background-color:orange;
	margin-top:5px;
}
</style>

</head>

<body>
<div id="outer">
<?php 
include("usermenu.php");
?>

<center><div id="head1">
<h1 style="line-height:100px;"><b>Feedback</b></h1>
</div></center>

<center><div id="head2">
<form action="feedcode.php" method="post">

<textarea name="feed" style="height:250px;font-size:22px; width:80%; background-color:#F9D08D; margin-top:25px;">

</textarea>
</div> </center>

<center><div id="submitd">
<input type="submit" value="Send" style="height:70px; width:300px; font-size:30px; font-family:calibri; margin-top:20px; background-color:#72c807; border:none; outline:none;"/>
</div></center>
</form>

</div>
</body>



</html>