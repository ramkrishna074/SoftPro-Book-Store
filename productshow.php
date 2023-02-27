<?php



?>
<html>
<head>
<style>
#outer{
	margin:0px; padding:0px;
	height:400px; width:300px; border:1px solid red; float:left;
}
#img{
	height:300px; width:200px; border:1px solid red;
}

</style>

</head>


<body>
<?php include("usermenu.php"); 

$catid=$_REQUEST['catid'];
//echo $catid;
include("connect.php");
 $query="select * from tbl_product where catid='$catid'";
$res=mysql_query($query);
?>

<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{

?>

<div id="outer">
<div id="product">
<img src="admin/product/<?php echo $row['picname'];?>" style="height:100%; width:100%;/>


<span style="line-height:30px; color:black;"><b><?php echo $row['bname'];?></b>
</div>
<div id="bprice">
<center><span style="line-height:30px; color:black;"><b><?php echo $row['price'];?></center></b></div>

<a href="cart.php?pid=<?php echo $row['proid'];?>">Add To Cart</a>
<a href="">Buy Now</a>

</div>
</div>
</div>
<?php
}
?>


</body>


</html>