<?php
error_reporting(0);
$qid=$_REQUEST['qid'];
//echo $qid;

?>
<h1>Post Answer</h1>
<form action="anscode.php" method="post">
<input type="hidden" name="qid" value="<?php  echo $qid;?>">
<textarea name="ans"></textarea>
<br/>
<input type="submit" value="Send">
</form>