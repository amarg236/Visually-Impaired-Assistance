<?php
  include("connect.php");  

	$id =$_REQUEST['sn'];
	$result = mysql_query("SELECT * FROM institutions WHERE ins_id = '$id'");
	$row = mysql_fetch_array($result);
	$image_location=$row["ins_photo_url"];
	$image_location_logo=$row["ins_logo_url"];
		// sending query
	mysql_query("DELETE FROM institutions WHERE ins_id = '$id'")
	or die(mysql_error());  	
	// Delete the images 
unlink("$image_location"); 
unlink("$image_location_logo");
header("Location: admin.php?id=6");
?>
