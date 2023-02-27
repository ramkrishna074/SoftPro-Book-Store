<?php

session_start();
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cp=$_POST['cp'];
//echo $cp;
$email=$_SESSION['admin'];
include("connect.php");
$query="select password from tbl_admin where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
if($pp==$op)
{
	
 if($op==$np)
 {
	//echo "no change" 
	header("Location:change.php");
 }
 else if($np==$cp)
 {
	//echo "change hoga";
	$query2="update tbl_admin set password='$cp' where email='$email'";
	mysql_query($query2);
	session_destroy();
	header("Location:index.php");
 }	
else{
	//echo " no change";
	header("Location:change.php");
}
} 
else
{
	echo "no change";
}





?>