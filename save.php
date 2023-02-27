<?php

 $name=$_POST['name'];
// echo $name;
$fname=$_POST['fname'];
//echo $fname;
$mail=$_POST['email'];
//echo $mail;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$city=$_POST['city'];
//echo $city;
$pin=$_POST['pin'];
//echo $pin;
$altaddress=$_POST['altaddress'];
//echo $address;
$bname=$_POST['bname'];
//echo $bname;
$qty=$_POST['qty'];
//echo $qty;
$dc=$_POST['dc'];
//echo $dc;
$tp=$_POST['tp'];
//echo $tp;
$proid=$_POST['proid'];
//echo $proid;
include("connect.php");
$query="select quantity from tbl_product where proid='$proid'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$allqty=$row['quantity'];
//echo $allqty;
$newqty=$allqty-$qty;
//echo $newqty;
if($qty>$allqty)
{
	echo "<script>alert('Sorry! We are out of Stock');window.location.href='viewcart.php';</script>";
}
else
{
	//echo "Quantity available";
	$query1="insert into tbl_buy(name,fname,email,mobile,address,city,pin,altadd,bname,price,qty,dc,total,date) values('$name','$fname','$email','$mobile','$address','$city','$pin','$altaddress','$bname','$price','$qty','$dc','$tp',curdate())";
	$check=mysql_query($query1);
	if($check==true)
	{
        $query2="update tbl_product set quantity='$newqty' where proid='$proid'";
		mysql_query($query2);
		header("Location:confirm.php");
          		
	}
	else
	{
		echo "Updation error";
	}
}







?>