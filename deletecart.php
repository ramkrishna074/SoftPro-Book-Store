<?php

$id=$_REQUEST['id'];
//echo $id;

 include("connect.php");
 $query="delete from tbl_cart where cartid='$id'";
 echo $query;
 mysql_query($query);
 header("Location:viewcart.php");
 
 
 
 
 


?>