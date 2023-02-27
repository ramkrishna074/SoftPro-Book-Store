<?php
session_start();
include("connect.php");
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$uid=$row['0'];	

$query2="insert into tbl_ques(uid,ques,date) values('$uid','$ques',curdate())";
mysql_query($query2);
header("location:discuss.php");
}
?>