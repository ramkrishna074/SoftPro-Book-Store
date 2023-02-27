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
	background-image:fixed;
	margin-top:-10px;
}

#head1{
	height:100px; width:50%;
	background-color:orange; float:left;
	font-size:30px; line-height:100px; margin-top:5px;
}
#head2{
	height:490px; width:40%;
	background-color:pink;  float:right;
	margin-top:5px;
    // margin-right:200px;
	margin-right:10px;
}
p{
	font-family:calibri; font-size:20px;
}

</style>

</head>



<body>
<div id="outer">

<?php include("usermenu.php"); ?>

<center><div id="head1">
<b>Update Your Profile</b>
</div></center>
<div id="head2">
<br/>
<form action="updatecode.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['0'];?>"/>
<p><b style="margin-left:70px;">Name :</b>
<input type="text" name="name" value="<?php echo $row['name'];?>" style="height:25px; margin-left:80px; width:200px;"/></p>

<br/>
<p><b style="margin-left:70px;">Father's Name :</b>
<input type="text" name="fname" value="<?php echo $row['fname'];?>" style="height:25px; margin-left:10px; width:200px;"/></p>

<br/>
<p><b style="margin-left:70px;">Mobile :</b>
<input type="mobile" name="mobile" value="<?php echo $row['mobile'];?>" style="height:25px; margin-left:70px; width:100px;"/></p>
<br/>

<p><b style="margin-left:70px;">Address :</b>
<textarea name="address" style="height:40px; margin-left:60px; width:200px;"><?php echo $row['address'];?>
</textarea></p>
<br/>

<p><b style="margin-left:70px;">City :</b>
<select name="city" style="height:25px; margin-left:95px; width:100px;">

 <option><?php echo $row['city'];?></option>
    <option>Allahabad</option>
    <option>Delhi</option>
    <option>Patna</option>
    <option>Lucknow</option>
    <option>Varanasi</option>

</select></p>
<br/>
<p><b style="margin-left:70px;">Pin :</b>
<input type="number" name="pin" value="<?php echo $row['pin'];?>" style="height:25px; margin-left:98px; width:200px;"/></p>
<br/>
<br/>
<input type="submit" value="Update" style="height:70px; margin-left:150px; width:250px;font-size:20px; border:none; outline:none; background-color:orange;"/>
</form>



</div>
<div id="arr">
<img style="height:70px; width:70px; float:left; margin-left:60px; margin-top:-70px;" src="images/icons/pngbook.png"/>
</div><br/><br/>
<div id="imgicon">
<img style="height:100px; margin-left:620px;width:150px;" src="images/icons/arrow-53-512.png"/>
</div></div>
</div>
</body>





</html>