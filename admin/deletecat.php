<?php
session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}


$id=$_REQUEST['did'];
//echo $id;

include("connect.php");
$query="delete from tbl_category where catid='$id'";
mysql_query($query);

 header("Location:addcat.php");
 
 
 
 
 


?>