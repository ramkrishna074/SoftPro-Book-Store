<?php
include("connect.php");


?>

<html>

<head>

<style>

.book{
	height:auto; width:100%;
	border:1px solid; float:left;
}
.item{
	height:auto; width:240px;
	border:1px solid; float:left;
	margin-top:20px;
	margin-left:20px;
	margin-bottom:20px;
}
.pic{
	height:180px; width:150px;
	border:1px solid;
	margin:10px auto;
}
button{
	height:50px; width:50%;
	float:left;
	font-size:15px;
}
</style>

</head>

<body>

<div class="book">
<?php
$query="select * from tbl_product order by proid desc limit 5";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{

?>
<div class="item">

<div class="pic">
<img src="admin/product/<?php echo $row['picname']; ?>" height="100%; width:100%;"/>
</div>
<h3 align="center"><?php echo $row['bname']; ?></h3>
<h4 align="center">&#8377;<?php echo $row['price']; ?></h4>
<a href="viewcart.php"><button>ADD TO CART</button></a>
<a href="buynow.php"><button>BUY NOW</button></a>

</div>

<?php

}

?>


</div>

</body>

</html>