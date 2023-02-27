<?php
session_start();
include("connect.php");

$query="select * from tbl_category";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	



?>
<html>
<body>

<div id="over">

<center>
<div id="header">
<td><a href="productshow.php?catid=<?php echo $row['0'];?>"><?php echo $row['category'];?></a></td>
</div>
</center>



<?php 
}
?>


<?php

$query1="select * from tbl_product";
$res1=mysql_query($query1);
	
	
	

?>


<head>

<style>
*{
	margin:0px; padding:0px;
}
#over{
	height:auto; width:100%;
	background-color:pink;
}
#outer{
	height:auto; width:280px;
	//border:1px solid red; 
	float:left;
	background-color:#e8e8ff;
	margin-left:50px;
	margin-top:20px;
}
#header{
	height:50px; width:20%; 
	background-color:#4073b2;
	line-height:50px;margin-left:0px;
	float:left; 
	
}
#header a{
	color:white;
	text-decoration:none;
}

#product{
	height:430px; width:300px;
	//background-color:lightblue;
	//margin-left:50px;
	margin-top:25px;
}

#img{
	height:300px; width:240px; 
	
	background-color:pink;
	 margin-left:20px; margin-top:0px;
	// border:1px solid;
}
#pname{
	height:30px; width:240px; 
	background-color:#90E367; 
	margin-top:2px;margin-left:20px;
	border-radius:10px;
	
}
#bprice{
	height:30px; width:240px;
	//background-color:red; 
	margin-left:20px;
}
#button{
	height:50px; width:240;background-color:white; margin-left:20px;margin-top:1px;
}
#left{
	height:50px; width:110px; float:left; background-color:#ff8c00; 
}
#right{
	height:50px; width:130px; float:left; background-color:green;
}


</style>

</head>




<?php 
while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{

?>
<div id="outer">

<div id="product">

<div id="img">

<img src="admin/product/<?php echo $row1['picname'];?>" style="height:100%; width:100%;"/>

</div>


<div id="pname">
<center><span style="line-height:30px; color:black;"><b><?php echo $row1['bname']?></center>
</b></div>
<div id="bprice">
<center><span style="line-height:30px; color:black;"><b>&#8377;<?php echo $row1['price']?></center>
</b>
</div>

	<div id="button">
<center>
<a href="cart.php?pid=<?php echo $row1['proid']?>"><div id="left"><span style="line-height:50px; color:white;"><b>BUY NOW</span></div></a></center>
<center>
<a href="buynow.php?pid=<?php echo $row1['proid']?>"><div id="right"><span style="line-height:50px; color:white;"><b>ADD TO CART</b></span></div></a></center>
</div>

</div>
</div>
</div>







<?php
}
?>






</body>


</html>