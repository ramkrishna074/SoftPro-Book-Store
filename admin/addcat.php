<?PHP
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
	margin:0px; padding:0px;
}
.outer{
	height:auto; width:100%;
	background-color:#e8e8ff;
}
#menu{
	height:50px; width:100%;
	background-color:#4b97f7;
	position:fixed;
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
	 border-left:2px solid green;
	 border-right:3px solid green;
}



#left{
	
	height:100vh; width:40%; position:fixed;
	background-color:#e8e8ff; float:left;
	margin-top:50px;
}
#right{
	height:100vh; width:60%; margin-top:50px;
	background-color:#e8e8ff; float:right;
	
}
#one{
	height:80px; width:70%; background-color:#72C807; margin-left:10%;
	line-height:80px; margin-top:70px; font-family:sans-serif;
}

#data{
	height:auto; width:65%;background-color:orange;
}
td a{
	text-decoration:none;
}


</style>

</head>

<body>

<div id="outer">

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

<div id="left">
<form action="catcode.php" method="post">

<div id="one"><h1><span style="margin-left:25% ">Add Category</span></h1>
</div>
<img style="height:80px; width:100px; float:right;margin-right:50px; margin-top:-100px;" src="../images/icons/add-list-256.png"/>

<img style="height:80px; width:100px; float:right;" src="../images/icons/arrow-53-512.png"/>

<span style="float:left; font-family:calibri; font-size:22px; height:50px width:300px; margin-top:100px; margin-left:60px"><h3>Category :<h3></span>
<div id="two">
<input type="text" name="cat" placeholder="     Category" style="height:45px; width:250px; background-color:#CDCB33;outline:none; margin-left:120px; margin-top:-35px; font-family:sans-serif; font-size:15px;" required=""/>
 </div>
 
<input type="submit" value="Add" style="height:45px; width:250px; outline:none; background-color:#72c807;border-radius:10px;font-family:sans-serif; font-size:20px; margin-top:55px; margin-left:40px;">
</form>
</div>


<div id="right">
<div id="data">

<table border="2" align="center" cellspacing="0" style="padding:20px; margin-top:120px;">
<tr>
<th style="height:30px; width:50px;">Sr.No.</th>
<th style="height:30px; width:130px;">Category</th>
<th style="height:30px; width:90px;">Date</th>
<th style="height:30px; width:90px;">Update</th>
<th style="height:30px; width:110px;">Delete</th>
</tr>

<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))

{
?>

<tr>

<td style="height:30px; width:50px; line-height:30px; margin-left:10px;"><center><?php echo $a;?></center></td>

<td><center><?php echo $row['category'];?></center></td>
<td><center><?php echo $row['date'];?></center></td>
<td><center><a href="updatecat.php?upid=<?php echo $row['catid'];?>"><h5>UPDATE<h5></a></center></td>
<td><center><a href="deletecat.php?did=<?php echo $row['catid']; ?>"><h5>DELETE<h5></a></center></td>
</tr>

<?php
 $a++;
}
?>

</table>
</div>
</div>


</div>
</body>


</html>