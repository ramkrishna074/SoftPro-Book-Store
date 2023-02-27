<?php

	
?>
<html>
<head>

<style>

*{
	margin:0px; padding:0px;
}
#outer{
	height:auto; width:100%; background-color:#dee1e6; margin-top:-10px;
}
th {
	width:100px;
}
td{
	font-family:calibri; height:20px;
}

</style>

</head>


<body>
<div id="outer">
<?php

include("connect.php");
include("usermenu.php");
if($_SESSION['user']=="")
{
	header("Location:login.php");
}


$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$uid=$row['regid'];
	//echo $uid;
}


?>
<center>
<table border="2" align="center" style="background-color:orange;">

<tr>
<th style="width:20px;"><center>Sr.No.</center></th>
<th><center>Name</center></th>
<th style="width:80px;"><center>Image</center></th>
<th><center>Price</center></th>
<th><center>Quantity</center></th>
<th><center>Delete</center></th>
<th><center>Buy Now</center></th>
</tr>



<?php 
$query1="select * from tbl_cart where userid='$uid'";
	$res1=mysql_query($query1);
	 
	 while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
	 {
		 $proid=$row1['proid'];
		// echo $proid;

$query2="select * from tbl_product where proid='$proid'";
$res2=mysql_query($query2);

if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
$a=1;


?>
<tr>
<td><center><?php echo $a;?></center></td>
<td><center><?php echo $row2['bname'];?></center></td>
<td><center><img src="admin/product/<?php echo $row2['picname'];?>" height="80px"/></center></td>
<td><center><?php echo $row2['price'];?></center></td>
<td><center><?php echo $row2['quantity'];?></center></td>
<td><center><a href="deletecart.php?id=<?php echo $row1['0'];?>">Delete</a></center></td>

<td><center><a href="buynow.php?pid=<?php echo $proid;?>">Buy Now</a></center></td>
</tr>





<?php
$a++;
}
 }
?>





</table>
</center>

</div>
</body>

</html>