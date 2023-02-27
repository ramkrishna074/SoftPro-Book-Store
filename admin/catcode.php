<?php

$cat=$_POST['cat'];
//echo $cat;
include("connect.php");
$query="insert into tbl_category(category,date) values('$cat',now())";
mysql_query($query);
//echo "ok;"
header("Location:addcat.php");
?>