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
	position:fixed;
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

#slider{
	height:500px; width:100%;
	//border:1px solid; background:url(images/slider/imgsoftpro.jpg);
	animation:slide 25s infinite;
}
@keyframes slide
{
	0%,100%
	{
		background:url('images/slider/office.jpg');
	}
	25%{
		background:url('images/slider/imgbalkani.jpg');
	}
	50%{
		background:url('images/slider/imgpaper.jpg');
	}
	75%{
		background:url('images/slider/imgbooks.jpg');
	}
	100%{
		background:url('images/slider/imgsoftpro.jpg');
	}
}
#head1
{
	height:51px; width:100%;
	//border:1px solid;
}

#category{
	height:295px; width:100%;
	border:1px solid;
	background-color:rgba(0,0,0,0.2);
}
.genre{
	height:200px; width:150px; margin-top:50px; margin-left:60px;
	background-color:green;	float:left; border-radius:10px;
    box-shadow:2px 2px 15px black;
}
.genre:hover{
	transform:scale(1.4);
}



#mid
{
	height:1220px; width:100%;
	//border:1px solid;
}

#right{
	height:1220px; width:90%; float:left; background-color:#f1f3f4; margin-top:2px;
}
.head2{
	height:5px; width:100%;
	//background-color:pink;
	
}
.row1{
	height:400px; width:100%;
	
}
.columns{
	height:400px; width:260px;
	margin-left:43px;
    float:left;
	//background-color:lightgreen; 
}
.columns:hover{
	border-left:2px dashed black;
	border-right:2px dashed black;
	
	
}
.img{
	height:300px;width:240px;background-color:grey;
	margin-top:10px; 
	margin-left:10px;
}
.price{
	height:40px;width:92%;margin-left:4%;
}
.buynadd{
	height:40px;width:92%;margin-left:4%;background-color:white;
}
.buynow{
	height:40px;width:45%;float:left;background-color:green;font-family:sans-serif;
}
.addtocart{
	height:40px;width:55%;float:right;background-color:orange;font-family:sans-serif;
}









</style>


</head>
<body>

<div id="outer">

<div id="menu">
<div id="menuup">
   
   
   <div id="one"><img src="images/logo.png" style="margin-top:5px;"/></div>
   
    <form action="search.php" method="post">
   <a href="search.php">
   <div id="two">
         <input type="text" style="height:40px; width:760px;color:white;  background-color:rgba(0,0,0,0.4); outline:none; font-family:calibri;font-size:19px;border:none;"/>
  
       <a href="#"><div id="searching" style="height:40px; width:60px; float:right; background-color:orange;"> <img style="height:30px; width:32px; margin-top:5px; margin-left:12px;" src="images/icons/search.png"/></div></a>
    
  </div></a>
  </form>

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

<br/><br/><br/><br/><br/></br/>

<div id="slider"></div>







<div id="mid">
   
     
   
   <center>
   <div id="right">
       <div class="head2"></div>
	   <div class="row1">
	          <div class="columns">
			 
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/litrature/img4.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
			   
			   
			  </div>
			 <div class="columns">
			 
			      
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/litrature/img6.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
			 
			 
			 </div>
	          <div class="columns">
			  
			  
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/litrature/img3.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
			  
			  
			  
			  </div>
	          <div class="columns">
			  
			  
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/litrature/img8.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
			  
			  
			  
			  </div>
	          
	  </div>
	   

         	   <div class="head2"></div>
	                <div class="row1">
		                <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/kids/img2.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
						
						
						</div>
	                    <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/kids/img3.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
						
						
						</div>
	                    <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/kids/img5.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>						
						
						
				        </div>
	                    <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/kids/img6.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
						
						
						</div>
	          
	                </div>
		

	           <div class="head2"></div>
			   
			   
			   	                <div class="row1">
		                <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/drawing/draw2.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
						
						
						</div>
	                    <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/drawing/draw3.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
						
						
						</div>
	                    <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/drawing/draw4.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>						
						
						
				        </div>
	                    <div class="columns">
						
						
			            <div class="img">
			                 <img style="height:300px; width:240px;"src="images/drawing/draw5.jpg">
			            </div>
			 
			              <div class="price"><center><span style="line-height:40px;"><b>&#8377 450     </b></span>  <span style="text-decoration:line-through;margin-left:5px;">&#8377 500</span><span style="color:green;margin-left:5px;"> 10%off</span></center></div>
              
			
			            <div class="buynadd">
			
			                <a href="#"><div class="buynow"><span style="margin-left:15px;line-height:40px; color:white;"><b>BUY NOW</b></span></div></a>
			   
			               <a href="#"><div class="addtocart"><span style=  "margin-left:10px;line-height:40px; color:white;"><b>ADD TO CART</b></span></div></a>
			  
		    </div>
						
						
						</div>
	          
	                </div>
		          
                <div class="head2"></div>
</div>

</center>


</div>

<div id="pklp">

<?php

include("generalfooter.php");

?>

</div>





</div>



</body>


</html>


