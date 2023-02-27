<?php
session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}



include("connect.php");
$id=$_POST['id'];
$cat=$_POST['cate'];
//echo $cat;
$query="update tbl_category set category='$cat' where catid='$id'";
mysql_query($query);
header("Location:addcat.php");

?>