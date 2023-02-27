<?php
session_start();

//echo "Profile prr aa gaye";
echo "<br/>";
//echo $_SESSION['user'];
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
$proid=$_REQUEST['pid'];
//echo $proid;
$qty=1;

include("connect.php");

$query="select * from tbl_product where proid='$proid'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);

?>
<html>
<head>
<style>
.outer
{
	height:100%;
	width:100%;
	border:1px solid;
}
.main
{
	height:600px;
	width:100%;
	background-color:lightblue;
}
.left
{
	height:65%;
	width:40%;
	margin-top:5%;
	margin-left:5%;
	border:1px solid grey;
	float:left;
}
.right
{
	height:65%;
	width:40%;
	margin-top:5%;
	margin-left:5%;
	border:1px solid grey;
	float:left;
}
.lft
{
	height:100%;
	width:35%;
	background-color:white;
	float:left;
}
.rft
{
	height:100%;
	width:65%;
	background-color:lightgrey;
	float:left;
}
.qty
{
	height:7%;
	width:20%;
	border:1px solid;
	float:left;
	margin-top:2%;
	margin-left:10%;
}
button
{
	height:100%;
	width:30%;
	float:left;
	font-size:20px;
}
span
{
	height:100%;
	width:40%;
	float:left;
	text-align:center;
	padding-top:6px;
	font-size:28px;
}
</style>
</head>
<body>
<div class="outer">
    <div class="main">
	<div class="left">
	<div class="lft">
       
		<img src="admin/product/<?php echo $row['picname'];?>" height="100%" width="100%"/>
		
	</div>
	<div class="rft">
	
        <h2>Name: <?php echo $row['bname'];?></h2>
        <h2>Description: <?php echo $row['description'];?></h2>
        <h2>Price: &#8377 <?php echo $row['price'];?></h2>
	
	</div>
	</div>
	
	
	
	<div class="right">
	   <form action="purchase.php" method="post">
	   <input type="hidden" name="id" value="<?php echo $row['proid']; ?>">
	     Quantity:
	       <input type="text"name="qty" id="q" value="<?php echo $qty; ?> " readonly />
		   <br/><br/>
		 Price:
		   <input type="text"name="price" id="p" value="<?php echo $qty*$row['price']; ?> " readonly />
		  <br/><br/>
		  Delevery Charges:	  
		   <input type="text" value="+50" readonly />
		   <br/><br/>
		  Net Amount
		  <input type="text" id="tp" value="<?php echo $qty*$row['price']+50; ?>"/>
		  <br/><br/>
		  <input type="submit" value="Save and Continue" style="float:right; margin-top:50px; height:50px; width:250px; margin-right:100px; background-color:#bf8dff;"/>
	</form>
	  
	</div>
	<div class="qty">
	<button onclick="min()">-</button>
	<span id="qty">1</span>
	<button onclick="plus()">+</button>
	</div>
	
</div>
</div>
<script src="js/buynow.js"></script>
</body>
</html>