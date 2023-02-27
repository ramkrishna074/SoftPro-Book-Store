<?php
session_start();
include("connect.php");
$id=$_POST['id'];
//echo $id;
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$city=$_POST['city'];
//echo $city;
$pin=$_POST['pin'];
//echo $pin;
$query="update tbl_user set name='$name',fname='$fname',gender='$gender',email='$email',mobile='$mobile',address='$address',city='$city',pin='$pin' where regid='$id'";
mysql_query($query);

?>