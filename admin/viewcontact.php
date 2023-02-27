<?php
include("connect.php");
$query="select * from tbl_contact";
 $res=mysql_query($query);


?>

<html>
<head>

<style>
*{
	margin:0px; padding:0px;
}
#outer{
		height:auto; width:100%; background-color:#e8e8ff;
	}
.gap{
	height:3px; width:100%; background-color:black; opacity:0.7;
}
th {
	width:28%;
}
td{
	font-family:calibri; height:20px;
}
</style>

</head>

<body>
<div id="outer">
<div class="gap"></div>
<?php
include("adminmenu.php");
?>
<div class="gap"></div>

<table border="2" align="center" cellspacing="0" style=" background-color:#e7e58e; margin-top:30px; margin-left:5%; font-size:20px;width:90%">


<tr>


<th style="width:3%;">Sr.No.</th>
<th style="width:20%;">Name</th>
<th>Email</th>
<th style="width:15%;">Mobile</th>
<th>Message</th>
<th>Date</th>

</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
//while($row=mysql_fetch_row($res))
{
?>
<tr>
<td><center><?php echo $a;?></center></td>

<td><center><?php echo $row['name'];?></center></td>
<td><center><?php echo $row['email'];?></center></td>
<td><center><?php echo $row['mobile'];?></center></td>
<td><center><?php echo $row['message'];?></center></td>
<td><center><?php echo $row['date'];?></center></td>
</tr>

<?php
 $a++;
}
?>

</table>



</div>
</body>

</html>