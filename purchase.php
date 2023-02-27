<?php
session_start();
include("connect.php");
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);	
//echo $row['0'];

$proid=$_POST['id'];
//echo $proid;
$qty=$_POST['qty'];
//echo $qty;
//echo "<br/>";
$price=$_POST['price'];
//echo $price;
//echo "<br/>";
$dc=50;
$tp=$price+$dc;
//echo $tp;

?>



<html>

<head>

<style>

.outer{
    height:auto%;
	width:100%;
	border:1px solid;
}
.header{
	height:10%; width:100%; background-color:#7382b1;
}
.main{
	height:80%; width:100%; background-color:lightblue;
}

.left{
	height:100%; width:40%; border:1px solid red; float:left;margin-left:5%;
}
.right{
	height:80%; width:40%; border:1px solid yellow; float:right;margin-right:5%;
}
.lft
{
	height:80%;
	width:35%;
	background-color:grey;
	float:left;
}
.rgt
{
	height:80%;
	width:65%;
	background-color:orange;
	float:left;
}


.footer{
	height:100%; width:100%; background-color:black;
}

</style>

</head>

<body>

<div class="outer">

<div class="header"></div>

<div class="main">
<form action="save.php" method="post">

    <div class="left">
	<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
	<td>Name</td>
	<td><input type="text" name="name" value="<?php echo $row['name']; ?>" readonly /></td>
	</tr>
	<tr>
	<td>F'Name</td>
	<td><input type="text" name="fname" value="<?php echo $row['fname']; ?>" readonly /></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name="email" value="<?php echo $row['email']; ?>" readonly /></td>
	</tr>
	<td>Mobile</td>
	<td><input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" readonly /></td>
	</tr>
	<td>Address</td>
	<td><textarea name="address"><?php echo $row['address']; ?> </textarea></td>
	</tr>
	<td>City</td>
	<td><input type="text" name="city" value="<?php echo $row['city']; ?>" readonly /></td>
	</tr>
	</tr>
	<td>Pin</td>
	<td><input type="text" name="pin" value="<?php echo $row['pin']; ?>" readonly /></td>
	</tr>
	</tr>
	<td>Alt Address</td>
	<td><textarea name="altaddress">altaddress</textarea></td>
	</tr>
	
	</table>
	
	</div>
	
	
	
    <div class="right">
	
	<?php
	$query1="select * from tbl_product where proid='$proid'";
	$res1=mysql_query($query1);
	$row1=mysql_fetch_array($res1,MYSQL_BOTH);
	$pic=$row1['picname'];
	//echo $pic."<br/>";
	$name=$row1['bname'];
	//echo $name."<br/>";
	?>
	
	<div class="lft">
	<img src="admin/product/<?php echo $pic; ?>" height="100%" width="100%"/>
	</div>
	
	<div class="rgt">
	<input type="hidden" name="price" value="<?php echo $row1['price'] ?>"/>
	<input type="hidden" name="proid" value="<?php echo $proid; ?>"/>
	  Name<input type="text" name="bname" value="<?php echo $name; ?>"readonly />
	  <br/><br/>
	  
	 Qty<input type="text" name="qty" value="<?php echo $qty; ?>"readonly />
	     <br/><br/>
	 DC<input type="text" name="dc" value="50" readonly />
	  <br/><br/>
	 Net Amount<input type="text" name="tp" value="<?php echo $tp; ?>"readonly />
	
	</div>
   <input type="submit" value="continue" style="height:10%; width:25%; margin-top:5%; position:relative; top:80px; margin-left:45%;"/>


</div>
</form>
</div>
<div class="footer"></div>


</div>

</body>


</html>