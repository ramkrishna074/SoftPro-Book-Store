<?php
include("connect.php");
$pname=$_POST['product'];
//echo $pname;
$aname=$_POST['aname'];
//echo $aname;
$cat=$_POST['book'];
//echo $cat;
$bookprice=$_POST['bookprice'];
//echo $bookprice;
$quantity=$_POST['quantity'];
//echo $quantity;
$description=$_POST['description'];
//echo $description;
$filename=$_FILES['file']['name'];
//echo $filename;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="product/";

$query="insert into tbl_product(bname,author,quantity,catid,price,picname,description,date) values('$pname','$aname','$quantity','$cat','$bookprice','$filename','$description',now())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
header("Location:profile.php");




?>