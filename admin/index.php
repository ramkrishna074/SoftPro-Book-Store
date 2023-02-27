<?php



?>

<html>

<head>

<style>
*{
	padding:0px; margin-top:0px;
}
#bgimg{
	
	background-image:url('../images/adminlogin.jpg');
	background-size:100% 100%;
	height:99vh;
	
}
.head{
	height:300px;width:23%;
	background-color:rgba(0,0,0,0.6);
   
	position:absolute;
	top:37%; left:50%;
	transform:translate(-50%,-50%);
	padding:30px; font-family:sans-serif;
	
}  	
.head h1{
	text-align:center; color:#fff;
} 
.head .box{
	position:relative;
	margin-left:7%;
	
}
.head .box input{
	width:95%; 
	padding:10px; font-size:16px; color:#fff;
	margin-bottom:25px; border:none;
	background-color:transparent; border-bottom:2px solid;
    outline:none;
	
}
.head .box label{
	position:absolute;
	top:0; left:0;
	padding:10px; font-size:18px; color:#fff;
	pointer-events:none;
	transition:.5s;
}
.head .box input:focus ~ label,
.head .box input:valid ~ label
{
	top:-30px;color:#03a9f4;
}

.head input[type="submit"]
{
	
	border:none; outline:none;
	color:#fff; padding:10px 60px;
	background:#03a9f4;
	cursor:pointer;
	letter-spacing:1px;
	margin-left:25%;
	border-radius:5px;
}

</style>


</head>

<body>
 
 <div id="bgimg">

 <div class="head" style="margin-top:50px;">
 <br/><br/>
<h1>Login</h1>

<br/><br/>

<form action="logcode.php" method="post">

<div class="box">
<input type="email" name="email" required=""/>
<label>Email</label>
</div>
<div class="box">
<input type="password" name="password" required=""/>
<label>Password </label>
</div>
<input type="submit" name="Login"/>

</form>
</div>

</div>



</body>

</html>