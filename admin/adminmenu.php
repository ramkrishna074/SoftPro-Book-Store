<?php



?>
<html>

<head>

<style>
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


</style>

</head>


<body>
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



</body>

</html>