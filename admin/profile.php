<?php

session_start();
//echo $_SESSION['admin'];

if($_SESSION['admin']=="")
{
	header("Location:index.php");
	session_destroy();
}

?>

<html>

<head>

<style>

*{
	margin:0px; padding:0px;
	
}
#bgimg{
	
	background-image:url('../images/bgadminprofile.png');
	background-size:100% 100%;
	height:100vh;
	width:100%
}
#bgcolor{
	background-color:rgba(0,0,0,0.5);
	background-size:100% 100%;
	height:100vh;
	width:100%
}
#one{
	height:100vh; width:25%; background-color:transparent; float:left;
	//background-color:lightgreen; 
}
#home{
	height:230px; width:230px; border:1px solid white; margin-left:35px; margin-top:30px;
	background-color:rgba(0,0,0,0.8); 
	border-radius:230px;
}
#home a:hover{
	background-color:green;
}
#container{
	height:100vh; width:45%; float:left; 
}
.row{
	height:90px; width:100%;
	//border:1px solid red;

}
#addcat{
	height:60px; width:45%;float:left; margin-top:30px; 
	 //background-color:white;
}


#logoutnchange{
	
	height:250px; width:15%; float:right; background-color:transparent; margin-right:4%;
}
#upper{
	height:100px; width:100%; margin-top:30px;
	background-color:transparent; 
}
#lower{
	height:60px; width:100%; margin-top:10px;
	background-color:#3c3d3c; border:1px solid white;
}
#lower a{
	color:white; text-decoration:none;
}
#lower a:hover{
	color:orange;
}

#logout a{
	text-decoration:none; color:white; 
}
#logout a:hover{
	 color:orange; 
}
.add{
	background-color:green; height:60px; width:45%; margin-top:30px;
	line-height:60px; font-family:calibri; font-size:23px;color:white;
	border:1px solid white;
}
.add a{
	 text-decoration:none;
}
.add:hover{
	background-color:orange;
}


</style>

</head>

<body>
<div id="bgimg">
<div id="bgcolor">
      <div id="one">
	  
	       <a href="profile.php"> <div id="home"><img style="height:200px; width:230px;" src="../images/adminhome.png"/></div></a>
	  



	  </div>
	  
	  
	  <div id="two" style="height:100vh; width:0.4%; background-color:orange; float:left;"></div>
	  
	     <div id="container">
	        
			<div class="row">
			
			  <a href="addcat.php"><div class="add" style="float:left; border-left:none;"><center><span><b>ADD CATEGORY</b></span></center></div></a>
			   
			</div>
	

     		<div class="row">
			
			 <a href="addpro.php"><div class="add" style="float:right;"><center><span><b>ADD PRODUCTS</b></span></center></div></a>
			
			</div>
			
			
			<div class="row">
			
			       <a href="product.php"><div class="add" style="float:left; border-left:none;"><center><span><b>VIEW PRODUCTS</b></span></center></div></a>
			
			</div>
			
			<div class="row">
			
			       <a href="viewfeedback.php"><div class="add" style="float:right;"><center><span><b>VIEW FEEDBACK</b></span></center></div></a>
			
			</div>
			
			<div class="row">
			
			       <a href="viewcontact.php"><div class="add" style="float:left; border-left:none;"><center><span><b>VIEW CONTACT</b></span></center></div></a>
			
			</div>
			
			<div class="row">
			
			       <a href="viewuser.php"><div class="add" style="float:right;"><center><span><b>VIEW USER</b></span></center></div></a>
			
			</div>
		  
	     
		 </div>
	  
     	 


	 <div id="logoutnchange">
	      
		  <div id="upper"><center><div id="logout" style="height:100px; width:50%; background-color:#3c3d3c; border-radius:50px; border:1px solid white;"><a href="logout.php"><b><span style="font-family:calibri;font-size:20px;line-height:100px;">Logout</span></b></a> </div></center></div>
		  
		  <div id="lower">
		      <center> <span style="font-family:calibri;font-size:20px;line-height:60px;"> <a href="change.php"><b>Change Password</b></a></span>   </center>
		  </div>
		
	 </div>




		
		 




</div>
</div>

</body>




</html>