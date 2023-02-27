<?php
session_start();
if($_SESSION['user']=="")
{
	header("location:login.php");
}
include("connect.php");
$query="select * from tbl_ques";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<form action="ques.php" method="post">
<h1>Discussion Board</h1>
<textarea name="ques"></textarea>
<br/>
<input type="submit" value="send"/>
</form>
<table border="1">
<tr>
<th>S.No.</th>
<th>User who asked</th>
<th>Question</th>
<th>Post answer</th>
<th>View answer</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<?php $uid=$row['uid'];
$query2="select * from tbl_user where regid='$uid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$uname=$row2['1'];
	//echo $uname;
}
?>
<td><?php echo $uname;?></td>
<td><?php echo $row['ques'];?></td>
<td><a href="ans.php?qid=<?php echo $row['0'];?>">post answer</a></td>
<td><a href="viewans.php?qid=<?php echo $row['0'];?>">view answer</a></td>
<td><?php echo $row['date'];?></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>