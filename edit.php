<?php
session_start();
include("connect.php");
$email=$_SESSION['user'];

$name=$_POST['name'];
echo $name;





?>