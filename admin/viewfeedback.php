<?php
session_start();
include("connect.php");
$query="select * from tbl_feed";
$res=mysql_query($query);


?>

<html>


<head>
<style>
*{
	margin:0px; padding:0px;
}
#outer{
		height:100vh; width:100%; background-color:#e8e8ff;
	}
.gap{
	height:3px; width:100%; background-color:black; opacity:0.7;
}
th {
	width:28%;
}
td{
	font-family:calibri; height:40px;
}

</style>
</head>

<body>
<div id="outer">
<div class="gap"></div>
<?php include("adminmenu.php"); ?>
<div class="gap"></div>

<table border="2" align="center" cellspacing="0" style=" background-color:#e7e58e; margin-top:30px; margin-left:250px; font-size:25px;">

<tr>
<th style="width:5%;">S.I.</th>
<th>User</th>
<th>Message</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><center><?php echo $a; ?></center></td>
<?php $uid=$row['userid'];
$query2="select name from tbl_user where regid='$uid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$uname=$row2['name'];
}
 ?>
<td><center><?php echo $uname; ?></center></td>
<td><center><?php echo $row['message']; ?></center></td>
<td><center><?php echo $row['date']; ?></center></td>
</tr>
<?php
}
?>
</table>


</div>
</body>
</html>