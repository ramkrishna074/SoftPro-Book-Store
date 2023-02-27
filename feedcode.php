<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
$feed=$_POST['feed'];
//echo $feed;
include("connect.php");
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$uid=$row['regid'];
	//echo $uid;
}	
$query2="insert into tbl_feed(userid,message,date) values('$uid','$feed',curdate())";
mysql_query($query2);

header("Location:feedback.php");

?>