<?php
session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}


include("connect.php");
$query="select * from tbl_category";
$res=mysql_query($query);


?>

<html>

<head>
<style>
*{
	padding:0px; margin:0px;
}
.outer{
	height:100vh; width:100%;
	font-family:calibri;
	font-size:20px;  background-color:#f0f0f0;
}
#menu{
	height:50px; width:100%;
	background-color:#4b97f7;
	//position:fixed;
}
 #menu ul{
  list-style-type:none;
}
#menu ul li
{
 height:50px;
 width:155px;
 //border:1px solid red;
  text-align:center; line-height:50px;
 float:left;
 margin-left:2px;
 
}
#menu ul li a
{
  text-decoration:none;
  font-family:calibri;
  font-size:20px;
  color:white;
}

#menu ul li:hover{
	 border-left:3px solid white;
	 border-right:3px solid white;
}

#top{
	height:70px; width:60%; background-color:#72c807; margin-left:10%; 
	margin-top:50px;line-height:70px;margin-left:15%;
}

#left{
	height:90%; width:40%; background-color:#f0f0f0; float:left;
}
#right{
	height:90%; width:60%; float:right; background-color:#f0f0f0; 
}
#container{
	height:94%; width:75%; background-color:orange;margin-top:4%;
	
}


</style>
</head>

<body>
<div class="outer">
<div id="menu">
<ul>
<li><a href="profile.php"><b>Home</b></a></li>
<li><a href="addcat.php"><b>Add Category</b></a></li>
<li><a href="addpro.php"><b>Add Products</b></a></li>
<li><a href="product.php"><b>View Products</b></a></li>
<li><a href="viewfeedback.php"><b>View Feedback</b></a></li>
<li><a href="viewcontact.php"><b>View Contact</b></a></li>
<li><a href="viewuser.php"><b>View User</b></a></li>
<li><a href="index.php"><b>Logout</b></a></li>
</ul>
</div>


<div id="left"><div id="top"><center><h1>Add Products</h1></center></div><img style="height:80px; width:100px; float:right;margin-right:80px; margin-top:-85px;" src="../images/icons/add-list-256.png"/>

<img style="height:50%px; width:60%; margin-left:10%;margin-top:16%; " src="../images/icons/pngbook.png"/>
<img style="height:80px; width:100px; float:right;" src="../images/icons/arrow-53-512.png"/>

</div>

<div id="right">

<div id="container">
<br/>
<form action="addcode.php" method="post" enctype="multipart/form-data">

<tr><span style="margin-left:50px;"><td><b>Product Name : </b></td></span>
<td><input type="text" name="product" style="margin-left:25px; height:25px; width:250px;" required=""/></td></tr>
<br/><br/>
<tr><span style="margin-left:50px;"><td><b>Author Name :</b></td></span>
<td><input type="text" name="aname" style="margin-left:32px; height:25px; width:250px;" required=""/></td></tr>
<br/>
<br/>
<tr><span style="margin-left:50px;"><td><b>Book Category :</b></td></span>
<td><select class="cat" name="book" style="margin-left:24px; height:25px; width:250px;"required=""/>

<option value="" style="margin-left:25px; height:25px; width:250px;">-select-</option>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option value="<?php echo $row['catid'];?>"><?php echo $row['category'];?></option>
<?php
}
?>
</select></td></tr>
<br/><br/>

<tr><span style="margin-left:50px;"><td><b>Book Price :</b></td></span>
<td><input type="text" name="bookprice" style="margin-left:56px; height:25px; width:250px;" required=""/><td></tr>
<br/>
<br/>
<tr><span style="margin-left:50px;"><td><b>Quantity :</b></td></span>
<td><input type="text" name="quantity" style="margin-left:70px; height:25px; width:250px;" required=""/></td></td>
<br/>
<br/>
<tr><span style="margin-left:50px;margin-bottom:50px;"><td><b>Description :</b></td></span>
<td><textarea name="description" style="margin-left:48px; height:55px; width:250px;">

</textarea></td></tr>
<br/>
<br/>
<tr><span style="margin-left:50px;"><td><b>Book Pic  :</b></td>
<td><input type="file" name="file" style="margin-left:70px; height:25px; width:250px;" required=""/></td></tr>
<br/>
<br/>
<input type="submit" value="Add " style="margin-left:180px; outline:none; border:none; background-color:#72c807; height:50px; width:250px;font-size:20px; border-radius:10px;"/>

</form>

</div>

</div>
</div>
</body>


</html>