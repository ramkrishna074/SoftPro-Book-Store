<?php




?>
<html>

<head>

<style>

#menu{
	height:114px; width:100%;
    background-color:rgba(0,0,0,0.3);
	//position:fixed;
}
#menuup{
	height:60px; width:100%;
}
#one{
	height:60px; width:200px; float:left;
}
#two{
	height:40px; width:820px; border:2px solid white; margin-top:10px;
	//background-color:pink;
	margin-left:80px; float:left; 
}
#three{
	height:60px; width:150px;
	//background-color:green;
	float:right; margin-right:30px;
}

#menudown{
	height:50px;
	width:100%;
	border:1px solid #1A446A;
	background-color:#1A446A;
}
#menudown ul{
    list-style-type:none;
  }
#menudown ul li
{
 height:40px; width:150px; margin:5px; text-align:center;
  line-height:40px; float:left; border-radius:18px;
// border:1px solid white;
}
#menudown ul li a{
  text-decoration:none; color:white;
}
#menudown ul li a:hover{
	color:orange;
}


</style>

</head>

<body>

<div id="menu">
<div id="menuup">
   
   
   <div id="one"><img src="images/logo.png" style="margin-top:5px;"/></div>
   
   
   <a href="search.php"><div id="two">
       <input type="text" style="height:40px; width:760px;color:white;  background-color:rgba(0,0,0,0.4); outline:none; font-family:calibri;font-size:19px;border:none;"/>
  
       <a href="#"><div id="searching" style="height:40px; width:60px; float:right; background-color:orange;"> <img style="height:30px; width:32px; margin-top:5px; margin-left:12px;" src="images/icons/search.png"/></div></a>
   </div></a>
  

   <div id ="three">
       <img style="height:54px; width:56px; margin-top:10px; float:right; margin-right:50px;" src="images/icons/cartforshow.png">
    </div>

</div>


<div id="menudown">
    
	<ul>
       <a href="index.php"><img style="height:40px;float:left; margin-left:50px; margin-top:5px; width:45px;" src="images/icons/home.png"></a>
       <li><a href="product.php"><span style="font-family:calibri; font-size:20px;"><b>PRODUCTS</b></span></a></li>
       <li><a href="about.php"><span style="font-family:calibri; font-size:20px;"><b>ABOUT US</b></span></a></li>
       <li><a href="register.php"><span style="font-family:calibri; font-size:20px;"><b>REGISTER</b></span></a></li>
       <li><a href="login.php"><span style="font-family:calibri; font-size:20px;"><b>LOGIN</b></span></a></li>
       <li><a href="contact.php"><span style="font-family:calibri; font-size:20px;"><b>CONTACT US</b></span></a></li>
      
    </ul>
	
	
	<div id="soft" style="height:40px; width:300px; float:right;margin-right:0px;">
	
	      <div id="side" style="height:44px;width:5px;border-radius:3px;background-color:orange;float:left; margin-top:3px;">
	      </div>
	
	      <span style="font-family:handwriting-draft_free-version; font-size:33px; color:white; line-height:50px; margin-left:10px;"><b> Softpro India</b></span>
	      </div>
	
</div>

</div>


</body>



</html>