<?php
include 'connect.php';
$img_id=$_REQUEST["img_id"];
$result = mysql_query("SELECT * FROM slider_image");
while($row = mysql_fetch_array($result))
{
$image_id=$row["image_id"];	
$image_location=$row["image_location"];
if($img_id==$image_id)
{
//Delete image details from database
mysql_query("DELETE FROM slider_image WHERE image_id = '$image_id'")
or die(mysql_error());  
// Delete the images 
unlink("$image_location"); 
//unlink("images/th/thumb_$delete"); 
header ("location:admin.php?id=2");
}
else
{
	echo "Image not deleted";
}
}
?>