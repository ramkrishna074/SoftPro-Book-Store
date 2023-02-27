<?php
include("connect.php");
$id=$_REQUEST['upid'];
//echo $id;
$query="select * from tbl_category where catid='$id'";
$res=mysql_query($query);

while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<form action="editcat.php" method="post">
	<table>
	<input type="hidden" name="id" value="<?php echo $row['catid'];?>"
	<tr>
	<td>category</td>
	<td><input type="text" name="cate" value="<?php echo $row['category'];?>"/></td>
	</tr>
	   <td><input type="submit" value="update"/></td>
	</table>
	
	</form>
	
	
	<?php
}

?>