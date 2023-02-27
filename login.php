<?php



?>
<html>
<head>

<style>

*{
	padding:0px; margin:0px;
}
#outer{
	width:100%; height:auto;
}
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

#bgimg{
	
	background-image:url('images/login.jpg');
	background-size:100%; 100%;
	height:90vh;
	
}
#bgupcolor{
	background-color:rgba(0,0,0,0.4);
	height:90vh;
	width:100%;
}
.head{
	height:300px;width:23%;
	background-color:rgba(0,0,0,0.6);
   
	position:absolute;
	top:65%; left:50%;
	transform:translate(-50%,-50%);
	padding:30px; font-family:sans-serif;
	
}  	
.head h1{
	text-align:center; color:#fff;
} 
.head .box{
	position:relative;
	margin-left:10%;
	
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

#footer{
height:390px; width:100%; background-color:black;
}

#ufooter{
	height:260px; width:100%;
	//border:1px solid #EEF2F5;
	background-color:#090a09;
}
.cfooter{
	height:250px; width:307px; 
	border:1px solid #090a09;
	margin-top:5px; margin-left:15px; float:left;
}
.social{
	height:55px;width:100%;margin-top:20px;
}
.socialmedia{
	height:45px; width:15%;background-color:#333333;float:left; margin-left:2%;border-radius:60px;
	margin-top:5px;
}
.social .socialmedia:hover{
	background-color:orange;
}







</style>


</head>
<body>




<div id="outer">



<div id="menu">
<div id="menuup">
   
    <div id="one"><img src="images/logo.png" style="margin-top:5px;"/></div>
   
   
   <div id="two">
       <input type="text" style="height:40px; width:760px;color:white;  background-color:rgba(0,0,0,0.4); outline:none; font-family:calibri;font-size:19px;border:none;"/>
  
       <a href="#"><div id="searching" style="height:40px; width:60px; float:right; background-color:orange;"> <img style="height:30px; width:32px; margin-top:5px; margin-left:12px;" src="images/icons/search.png"/></div></a>
   </div>
  

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


<div id="bgimg">
<div id="bgupcolor">



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


</div></div>




<div id="footer">



              
    <div id="ufooter">

         <div class="cfooter" style="margin-left:25px;">
         <br/><center><span style="color:#F6EED2; font-family:calibri; font-size:22px; opacity:0.6">ABOUT</span></center>
		 <center><hr style="height:1px; width:30%; background-color:white;opacity:0.3;"></hr></center>
		 <br/>
		 
		 <span style="color:#F6EED2; font-family:calibri;margin-left:86px;"><span style="margin-right:23px;">></span><a style="color:white; text-decoration:none;" href="#">About Us</a></span><br/>
		 <center><hr style="height:0px; width:45%; background-color:white;opacity:0.2;"></hr></center>
		                                               <br/>
		 
		 <span style="color:#F6EED2; font-family:calibri;margin-left:86px;"><span style="margin-right:23px;">></span><a style="color:white; text-decoration:none;" href="#">Contact Us</a></span><br/>
		 <center><hr style="height:0px; width:45%; background-color:white;opacity:0.2;"></hr></center>
		 

    </div>

    <div class="cfooter">
         <br/><center><span style="color:#F6EED2; font-family:calibri; font-size:22px; opacity:0.6">HELP</span></center>
		 <center><hr style="height:1px; width:25%; background-color:white;opacity:0.3;"></hr></center>
		               <br/>
			  
			   <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Payments</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
		                                                    <br/>
					  
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Shipping</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
			                                                 <br/>
					 
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Cancellation & Returns</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
		                                                      <br/>
					 
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">FAQ</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
		 
		 
		 
		 
		 
		 
    </div>


    <div class="cfooter">
         
		 <br/><center><span style="color:#F6EED2; font-family:calibri; font-size:22px; opacity:0.6">POLICY</span></center>
		 <center><hr style="height:1px; width:30%; background-color:white;opacity:0.3;"></hr></center>
		                <br/>
						
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Return Policy</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
			                                             <br/>
					  
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Security</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
			                                              <br/>
					  
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Privacy</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
			                                            <br/>
						
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Terms & Conditions</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
		 
		 
    </div>


    <div class="cfooter">
	
	 <br/><center><span style="color:#F6EED2; font-family:calibri; font-size:22px; opacity:0.6">SOCIAL</span></center>
		 <center><hr style="height:1px; width:30%; background-color:white;opacity:0.3;"></hr></center>
		                <br/>
						
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Twitter</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
			                                                   <br/>
					   
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Facebook</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
                                                              <br/>			            
						
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Instagram</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
			                                                   <br/>
															   
		       <span style="color:#F6EED2; font-family:calibri;margin-left:55px;"><span style="margin-right:10px;">></span><a style="color:white; text-decoration:none;" href="#">Google - Plus</a></span><br/>
		       <center><hr style="height:0px; width:65%; background-color:white;opacity:0.2;"></hr></center>
	                      <br/>
				
				
				<div class="social">
				  <a href="#"> <div class="socialmedia" style="margin-left:50px;"><img style="height:30px; width:50%; margin-top:9px;margin-left:25%;"src="images/icons/twitter-256.png"></div></a>
				  <a href="#"><div class="socialmedia"><img style="height:26px; width:50%; margin-top:9px;margin-left:22%;"src="images/icons/facebook-512.png"></div></a>
				  <a href="#"> <div class="socialmedia"><img style="height:25px; width:50%; margin-top:11px;margin-left:23%;"src="images/icons/instagram-512.png"></div></a>
				  <a href="#"> <div class="socialmedia"><img style="height:25px; width:50%; margin-top:12px;margin-left:30%;"src="images/icons/google-plus-512.png"></div></a>
				   
				   
				</div>		  
	</div>

    </div>
	
	
<div id="paymentcards" style="height:50px; width:100%; background-color:#090a09;">
	
	   <div class="cards" style="height:45px; width:75px;background-color:black;float:left;margin-left:500px;"><img style="height:45px;width:75px; margin-left:1px;" src="images/cardpayments/mastercard.png"></a></div>
	   
	   <div class="cards" style="height:45px; width:75px;background-color:black;float:left;"><img style="height:45px;width:75px; margin-left:2px;" src="images/cardpayments/paypal.png"></a></div>
	  
	  <div class="cards" style="height:45px; width:75px;background-color:white;border-radius:5px;float:left;margin-left:3px;"><img style="height:45px;width:75px; margin-left:2px;" src="images/cardpayments/paytm.png"></a></div>
	  
	  <div class="cards" style="height:45px; width:75px;background-color:black;float:left;"><img style="height:45px;width:75px; margin-left:2px;" src="images/cardpayments/cirrus.png"></a></div>
	  
	  <div class="cards" style="height:45px; width:75px;background-color:bllack;float:left;"><img style="height:45px;width:75px; margin-left:2px;" src="images/cardpayments/visa.png"></a></div>


</div>



<div id="line" style="height:1px; width:100%; background-color:white; opacity:0.1;"></div>


<div id="copyright" style="height:79px;width:100%;background-color:black;">

         <span style="color:white; line-height:79px; margin-left:80px; float:left;"> 2019 &copy Copyright <span style="color:orange;">Softpro Book Store (P) Ltd.</span> All rights Reserved</span>
	  
       <span style="color:white; line-height:79px; margin-right:80px; float:right;">Designed & Developed By <span style="color:orange;"> Ram Krishna Yadav</span></span>
       
</div>


</div>





</div>





</body>
</html>