<?php
  include("connect.php");  

	$id =$_REQUEST['sn'];
		// sending query
	mysql_query("DELETE FROM news WHERE sn = '$id'")
	or die(mysql_error());  	
	
	header("Location: admin.php?id=1");
?>