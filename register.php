
<?php



?>

<html>
<head>

<style>

*{
	margin:0px;
	padding:0px;
}
#bgimage{
	background-image:url('images/backdrop-background-orange-132197.jpg');
	background-size:100% 100%;
	height:100vh;
	width:100%
	background-image:fixed;
}
#container{
	width:550px; height:100vh;
	border:1px solid; border-radius:0px;
	margin-left:450px;
	background-color:rgba(0,128,0,0.5);
td{
	font-size:25px;
	color:black;
	
}
tbl{
	margin-left:20px;
}
#cacc{
	height:70px; width:75%; background-color:green;
	margin-top:30px;
	font-family:areal; font-size:40px;
	line-height:70px;
}
#info{
	height:500px; width:100%; 
	//background-color:pink;
}
.reglast{
	height:500px;; width:100%;background-color:pink;
}

</style>

</head>


<body>
<div id="menu">

<?php

include("generalmenu.php");

?>

</div>
<div id="bgimage">

       <div id="container">

   <center><div id="cacc"> <span style="font-size:50px;"><b>Create Account</b></span></div></center>
<form action="registercode.php" method="post">
<br/>
<div id="info">
<br/>
<span style="margin-left:50px;"><b>Name :</b></span>
<input type="text" name="name" required="" style="height:30px; width:280px; margin-left:70px;" required=""/>
<br/><br/>

<span style="margin-left:50px;"><b>Father's Name :</b></span>
<input type="text" name="fname" required="" style="height:30px; width:280px; margin-left:10px;" required=""/>

<br/><br/>
<span style="margin-left:50px;"><b>Gender :</b></span>
<input type="radio" name="a" required="" value="male" style="margin-left:80px;" required=""/><b>Male</b>
<input type="radio" name="a" required="" value="female" style="margin-left:20px;" /><b>Female</b>
<br/><br/>

<span style="margin-left:50px;"><b>Email :</b></span>
<input type="email" name="email" style="height:30px; width:280px; margin-left:68px;"/>
<br/><br/>

<span style="margin-left:50px;"><b>Password:</b></span>
<input type="password" name="password" style="height:30px; width:280px; margin-left:45px;"/>
<br/><br/>

<span style="margin-left:50px;"><b>Mobile :</b></span>
<input type="mobile" name="mobile" style="height:30px; width:280px; margin-left:60px;"/>
<br/><br/>

<span style="margin-left:50px;"><b>Address :</b></span>
<textarea name="address" required="" style="height:30px; width:280px; margin-left:50px;">
</textarea>

<br/><br/>

<span style="margin-left:50px;"><b>City :</b></span>
<select name="city" required="" style="height:30px; width:280px; margin-left:75px;">

    <option>--select--</option>
    <option>Allahabad</option>
    <option>Delhi</option>
    <option>Patna</option>
     <option>Agra</option>
    <option>Lucknow</option>
    <option>Varanasi</option>
       
</select>
<br/><br/>

<span style="margin-left:50px;"><b>Pin Code :</b></span>
<input type="number" name="pin" required="" style="height:30px; width:280px; margin-left:40px;"/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<br/><br/><br/>
<a href=""><input type="submit" value="Register" style="height:50px;font-size:25px; width:220px; margin-left:190px; background-color:#ff8c00; border:none; outline:none; margin-top:-20px;"/></a>

</div>
</form>


<div id="img2">
<img style="height:80px; width:80px; margin-top:-560px; margin-left:10px;"src="images/icons/add-user-3-512.png"/>


</div>

</div></div>



<div class="reglast">
<?php

include("generalfooter.php");

?>

</div>




</body>
</html>