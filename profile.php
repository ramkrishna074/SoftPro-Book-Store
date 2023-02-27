<?php




?>
<html>
<head>

<style>
*{
	margin:0px; padding:0px;
}
#outer{
	height:auto; width:100%;
	background-image:url('images/165799.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	background-attachment: fixed;
	
}
#records{
	height:500px; width:35%;
	background-color:rgba(255,165,0,0.8);
}
#welcome{
	height:200px; width:350px; float:right; margin-top:-300px;
	color:white;
}

</style>

</head>
<body>
<div id="outer">

<div id="menu">
<?php include("usermenu.php");

include("connect.php");
$email=$_SESSION['user'];
if($_SESSION['user']=="")
{
	header("Location:login.php");
}
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{

 ?>

</div>

<div id="records">
<br/><br/>
<h1 style="margin-left:100px;"> Your Details</h1>

<form>
<input type="hidden" name="id" readonly value="<?php echo $row['0'];?>"/>
<b style="margin-left:50px;">Name :</b>
<input type="text" name="name"  readonly  value=" <?php echo $row['name'];?> " style="outline:none; margin-left:70px; border:none; background-color:#ffe9a0;"/>
<br/>
<br/>
<b style="margin-left:50px;">Father's Name :</b>
<input type="text" name="fname" readonly value="<?php echo $row['fname'];?>" style="outline:none;margin-left:10px; border:none; background-color:#ffe9a0;"/>
<br/>
<br/>
<b style="margin-left:100px;">Gender :</b>
<input type="radio" name="a" readonly value="male" <?php if($row['gender']=='male'){?> checked <?php }?>/>Male
<input type="radio" name="a" readonly value="female" <?php if($row['gender']=='female'){?> checked <?php } ?>/>Female
<br/>

<br/>
<b style="margin-left:50px;">Mobile :</b>
<input type="mobile" name="mobile" style="outline:none;align:center;margin-left:60px; border:none; background-color:#ffe9a0;" readonly value="<?php echo $row['mobile'];?>"/>
<br/>
<br/>
<b style="margin-left:50px;">Address :</b>
<textarea name="address" readonly style="outline:none;margin-left:46px; border:none; background-color:#ffe9a0;" ><?php echo $row['address'];?> 
</textarea>
<br/>
<br/>
<b style="margin-left:50px;">City :</b>
<select name="city" style="outline:none;margin-left:72px; border:none; background-color:#ffe9a0;">

 <option> <?php echo $row['city'];?></option>
    <option>Allahabad</option>
    <option>Delhi</option>
    <option>Patna</option>
    <option>Lucknow</option>
    <option>Varanasi</option>

</select>
<br/>
<br/>
<b style="margin-left:50px;">Pin :</b>
<input type="number" name="pin" readonly value="<?php echo $row['pin'];?>" style="outline:none;margin-left:73px; border:none; background-color:#ffe9a0;"/>
<br/>
<br/>

</form>

<?php } ?>

</div>


<div id="welcome">

<h1 style="font-family:areal; font-size:30px;"><b>WELCOME TO YOUR </b></h1>

    <h1 style="font-family:calibri; font-size:35px; margin-left:100px;"><b>PROFILE</b></h1>

</div>










</div>
</body>
</html>