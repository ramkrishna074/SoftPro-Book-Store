<?php
session_start();
if($_SESSION['user']=="")
{
	header("Location:login.php");
}
include("connect.php");
$proid=$_REQUEST['pid'];
//echo $proid;

$email=$_SESSION['user'];
//echo $email;

$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$uid=$row['regid'];
	//echo $uid;


$query2="select * from tbl_cart where userid='$uid' and proid='$proid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	echo "<script>alert('Item already added');window.location.href='product.php';</script>";
}
else
{
$query1="insert into tbl_cart(userid,proid,date) values('$uid','$proid',curdate())";
mysql_query($query1);
//echo "aa gaya";
header("Location:viewcart.php");
}
}
?>