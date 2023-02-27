<?php
session_start();
$email=$_SESSION['user'];
//echo $email;
include("connect.php");
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$uid=$row['0'];
//echo $uid;
$query1="select count(*) as itemno from tbl_cart where userid='$uid'";
$res1=mysql_query($query1);
$row1=mysql_fetch_array($res1,MYSQL_BOTH);
$item_no=$row1['itemno'];
//echo $item_no;
}
?>



<html>

<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
*{
	margin:0px; padding:0px;
}
#menu{
	height:65px; width:100%;
	background-color:#1a446a;
}
#menu ul
  {
  list-style-type:none;
}
#menu ul li
{
	margin:6px;
 height:50px;
 width:150px;
  text-align:center;
  line-height:50px;
 float:left;
 border-radius:12px;
}
#menu ul li a
{
  text-decoration:none;
  color:white;
}
#menu ul li:hover
{
border:2px solid grey;

}
</style>


</head>


<body>


<div id="menu">

<ul>
   <li><a href="profile.php">Home</a></li>
   <li><a href="product.php">Products</a></li>
   <li><a href="discuss.php">Discussion Board</a></li>
   <li><a href="feedback.php">Feedback</a></li>
   <li><a href="update.php">Update Profile</a></li>
   <li><a href="changepass.php">Change Password</a></li>
   <li><a href="logout.php">Logout</a></li>
   <li><a href="viewcart.php">Cart<span class="badge" style="margin-left:5px;"><?php echo $item_no; ?></span></a></li>

</ul>


</div>

</body>

</html>