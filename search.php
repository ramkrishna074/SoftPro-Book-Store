<?php
include("connect.php");
@$search=$_POST['search'];
$query="select * from tbl_product where bname like'%$search%' or author like'%$search%'";
$res=mysql_query($query);



?>


<html>
<head>

<style>

*{
	margin:0px; padding:0px;
}
#outer{
	height:100%;
	width:100%; background-color:pink;
}
#head1{
	height:150px;
	width:80%; background-color:orange;
	font-size:55px; font-family:calibri;
	line-height:150px;
	
}

</style>

</head>

<body>
<div id="outer">


<form action="search.php" method="post">

<center><div id="head1">

<p1><b>BEST PRODUCTS ARE HERE...</b></p1>
<img style="height:50px; width:50px;" src="images/icons/pngbook.png"/>

</div></center>

 
 <input type="text" name="search" value="<?php $search ?>" style="height:60px; width:700px;outline:none; border:none; margin-left:200px; font-size:20px; "/>
 
 
<a href="#"><input type="submit" value="SEARCH" style="height:60px; width:200px; border:none; outline:none;
  margin-top:60px; background-color:orange; font-size:20px;"/></a>
 
</form>
<br/><br/><br/>
<span style="margin-left:100px; font-family:areal; font-size:40px;"><b>Searched Before :</b></span>
<br/>
<?php 

if(mysql_num_rows($res)!=0)
{
	while($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		?>
		<table align="center" cellspacing="0" style="float:left; margin-left:20px;height:30px; margin-top:10px; background-color:#72c807">
		<td>
		<p><?php echo $row['bname']; ?></p>
		</td>
		
		</table>
		<?php
	}
}
else
{
	echo "No Result";
}

?>
































</div>
</body>

</html>