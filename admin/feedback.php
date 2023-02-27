<?php
session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}



include("connect.php");
$query="select * from tbl_feed";
 $res=mysql_query($query);


?>

<html>


<head>
</head>

<body>

<table border="1" align="center">
<tr>
<th>Sr.No.</th>
<th>User</th>
<th>Message</th>
<th>Date</th>
</tr>





</table>

</body>


</html>