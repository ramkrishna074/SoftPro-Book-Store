<?php

session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}


include("connect.php");
$id=$_REQUEST['ppid'];
//echo $id;
$query="delete from tbl_product where proid='$id'";
mysql_query($query);
header("Location:product.php");

?>