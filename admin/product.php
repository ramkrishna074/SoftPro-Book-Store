<?php
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
include("connect.php");
 $query="select * from tbl_product";
 $res=mysql_query($query);
 
 
 
?>


<html>


<head>
<style>

*{
	padding:0px; margin:0px;
}
#outer{
	height:auto; width:100%; background-color:#e8e8ff;
}
.gap{
	height:3px; width:100%; background-color:black; opacity:0.7;
}
tr{
	background-color:#E7E58E;
}
td{
	text-decoration:none;
}

</style>

</head>



<body>
<div id="outer">
<div class="gap"></div>
<div id=menu>
<?php
include("adminmenu.php");
?>
</div>
<div class="gap"></div>

<center>
<table border="2" align="center" cellpadding="8" cellspacing="0" style="margin-top:30px;">

<tr>
<th><span style="margin-left:4px; width:10px; height:10px;">Sr.No.</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Book Name</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Author Name</span></th>
<th><span style="margin-left:5px; width:30px; height:10px;">Category</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Book Price</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Quantity</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Description</span></th>
<th><span style="width:80px; height:10px;">Book Pic</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Date</span></th>
<th><span style="margin-left:5px; width:80px; height:10px;">Delete</span></th>
</tr>


<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
//while($row=mysql_fetch_row($res))
{
?>
<tr>

<td><center><?php echo $a;?><center></td>
<td><center><?php echo $row['bname'];?></center></td>
<td><center><?php echo $row['author'];?></center></td>
<td><center><?php echo $row['catid'];?></center></td>
<td><center><?php echo $row['price'];?></center></td>
<td><center><?php echo $row['quantity'];?></center></td>
<td><center><?php echo $row['description'];?></center></td>
<td><img src="product/<?php echo $row['picname'];?>"height="80px" width="70px"/></td>
<td><center><?php echo $row['date'];?></center></td>
<td><center><a href="deletepro.php?ppid=<?php echo $row['proid']; ?>"><h5><img style="height:25px; width:20px;" src="../images/icons/delete-256.png"><h5></a></center></td>

</tr>
<?php
$a++;
}
?>
</table>
</center>
</div>
</body>





</html>