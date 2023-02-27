<?php  
//echo "Ho gaya";
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$city=$_POST['city'];
//echo $city;
$pin=$_POST['pin'];
//echo $pin;
include("connect.php");
$query1="select email from tbl_user where email='$email'";
$res=mysql_query($query1);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	//header("Location:register.php");
	echo "<script>alert('Email already registered');window.location.href='register.php';</script>";
}
else
{

$query="insert into tbl_user(name,fname,gender,email,password,mobile,address,city,pin,date) values('$name','$fname','$gender','$email','$password','$mobile','$address','$city','$pin',curdate())";
mysql_query($query);
header("Location:login.php");

}

?>