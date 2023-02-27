<?php


?>



<html>

<head>

<style>
*{
	margin:0px; padding:0px;
}
#outer{
	height:auto; width:100%;
	background-image:url('images/img2.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	background-attachment: fixed;
	
}
#about{
	height:auto; width:100%;
	background-color:rgba(255,255,255,0.5);
}

.space{
	height:13px; width:100%; 
	background-color:transparent; opacity:0.5;
}
#bgimage{
	height:350px; width:100%;
}
#heading{
	height:100px; width:100%;
	//border:1px solid;
}
#container{
	height:auto;width:90%;
	//border:1px solid;
	background:transparent;
	background-color:rgba(255,255,255,0.7);
	font-family:calibri;
	font-size:18px;
}
#material1{
	height:auto; width:95%;
	background-color:transparent;
	//border:1px solid; 
	//margin-top:2%;
}
#officals{
	height:300px; width:100%;
}
.ceo{
	 height:280px; width:280px; background-color:pink; float:left; border-radius:280px; margin-left:30px;
}

#footerimg{
	height:340px; width:100%;
// background-color:rgba(255,255,255,0.7);
}
#values{
	height:340px; width:70%; background-color:transparent;
	font-family:calibri; font-size:22px;float:left;
}
#valuesbg{
	height:320px; width:100%; background-color:white; margin-top:20px; margin-left:30px;
}
#line{
	height:320px; width:4px; background-color:black; margin-left:40px;
	margin-top:20px; float:left; border-radius:5px; opacity:0.5;
}
#valuesimg{
	height:340px; width:340px;background-color:transparent;float:left;
}



</style>

</head>


<body>
<div id="outer">
<div id="about">

<div id="menu">
<?php include("generalmenu.php"); ?>
</div>
<br/><br/><br/><br/><br/><br/>

<div id="bgimage">

<center><img style=" height:350px; width:96%;"src="images/about.jpg"></center>
</div>
<div class="space"></div>
<div id="heading">
<center>
<span style="font-family:calibri;font-size:55px; line-height:100px;">
 <b>ABOUT US </b>
</span></center>
</div>

<center>
<div id="container">
<div id="material1">
<br/><br/>
<p1>Softpro India Computer Technologies Private Limited (parent company of Softpro Group) was founded in 2004, by a team of Technocrats; Er. S K Verma graduated from Indian Institute of Technology (IIT) Kanpur in the year 1989, the pioneer institute of the country, and Er. Ajay Chaudhary, an Engineering Graduate from Institute of Engineering & Technology (I.E.T) Lucknow of 1995 Batch.</p1>
<br/><br/>
<p2>
Softpro India, started in 2004 as a small company with a big vision, is a dynamic new generation software solution as well as Networking Product Development company. The company develop, markets, sells and supports software products, ERPs, Web Based Projects, Networking Projects and offers turnkey solutions to the customers. Softpro’s development team is built of motivated, young, yet experienced professionals, all of whom have a higher degree. We have a strong track record of innovation. Our solutions have been used by clients of different background and size, from small companies to individuals and government organizations.
</p2>
<br/><br/>
<p3>
Softpro India is master in programming services, Application Development and Integration Services, Web Design and Development Services and R&D. We offer customized and flexible IT solutions, with low costs for international standards, without any reduction or loss in quality, technology and/or scalability for the client. We treat our clients with courtesy, friendliness and intelligence.
</p3>
<br/><br/>
<p4>
At Softpro India we are proud of our high-quality standards. These standards allow us to provide our customers with reliable and error-free software applications, regardless of complexity. Our top-notch developers use the latest software methodologies and technologies. This means that they can concentrate on our clients' business goals and keep them involved in every stage through the entire project. Our meticulous approach has helped us build our excellent track record with no failed or aborted projects. We are in the business of change, managing complexity with an unparalleled insight, looking beyond the horizon of IT with resources focused on solutions. Becoming successful is a skill but one cannot perfect it without practice.
</p4>
<br/><br/><br/>
</div>
</div>
</center>
<div class="space"></div>
<br/>
<div id="officals">

<div class="ceo" style="margin-left:240px;">

<img style="height:280; width:280px; border-radius:280px;" src="images/ajaysir.jpg">
</div>
<div class="ceo">
<img style="height:280; width:280px; border-radius:280px;" src="images/yashi.jpg">
</div>
<div class="ceo">
<img style="height:280; width:280px; border-radius:280px;" src="images/IMG-20190810-WA0014.jpg">
</div>


</div>

<div id="footerimg">

<div id="values">
<div id="valuesbg">
<p8>
<br/>
<span style="color:orange; margin-left:50px;"><b><i>Our Values:</i></b></span> 
<br/>
<span style="margin-left:50px;">1. Trust, Respect and Honesty.</span> 
<br/><br/>
<span style="margin-left:50px;">2. Dedication, commitment and passion for work to deliver excellent results & superior quality.</span> 
<br/><br/>
<span style="margin-left:50px;">3. To be innovative and creative in what industry has to offer.</span> 
<br/><br/>
<span style="margin-left:50px;">4. Full support to our Staff to develop to their full potential.</span> 
<br/><br/>
<span style="margin-left:50px;">5. We believe in long term and fruitful relations with our customers, employees and partners.</span> 

</p8>
</div></div>
<div id="line"></div>

<div id="valuesimg">

<img style="height:320px; width:300px; margin:20px;" src="images/values.png"/>

</div>

</div>
<div class="space"></div>

<?php

include("generalfooter.php");

?>

</div></div>
</body>

</html>