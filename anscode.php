<?php
$qid=$_POST['qid'];
//echo $qid;
$ans=$_POST['ans'];
//echo $ans;
include("connect.php");
$query="insert into tbl_ans(answer,qid,date) values('$ans','$qid',curdate())";
mysql_query($query);
header("location:discuss.php");
?>