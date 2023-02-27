var qtyv=parseInt(document.getElementById("qty").innerHTML);
var price=parseInt(document.getElementById("p").value);

//alert(qtyv);
function plus()
{
	qtyv++;
	document.getElementById("qty").innerHTML=qtyv;
	 document.getElementById("q").value=qtyv;
	 document.getElementById("p").value=qtyv*price;
	 document.getElementById("tp").value=qtyv*price+50;
}
function min()
{
	if(qtyv<=1)
	{
	   qtyv=1;
       document.getElementById("qty").innerHTML=qtyv;
	   document.getElementById("q").value=qtyv;
	    document.getElementById("p").value=qtyv*price;
		 document.getElementById("tp").value=qtyv*price+50;
      
       	   
	}
	else if(qtyv>1)
	{
	   qtyv--;
       document.getElementById("qty").innerHTML=qtyv;
       document.getElementById("q").value=qtyv;
      document.getElementById("p").value=qtyv*price;
 document.getElementById("tp").value=qtyv*price+50;	  
	}
}