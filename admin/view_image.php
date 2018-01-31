<?php
include 'connect.php';
$img_id=$_REQUEST['image_id'];
$result=mysql_query("select * from slider_image where image_id='$img_id'") or die(mysql_error()) or mysql_error();
$test = mysql_fetch_array($result);
$location=$test["image_location"];
$caption=$test["image_caption"];
echo '<img src="'.$location.'" width=400 height=200>';
if(isset($_POST['save']))
{
$caption_new=$_POST["caption"];
mysql_query("UPDATE slider_image SET image_caption ='$caption_new' WHERE image_id = '$img_id'")
				or die(mysql_error());
				header("location:admin.php?id=2");
}
mysql_close($con);
?>
<form method="post" enctype="multipart/form-data" name="slider_image">
 Caption:
 <input name="caption" type="text" class="ed" id="brnu" size="100" maxlength="100" value="<?php echo $caption; ?>" />
 <br />
 <input type="submit" name="save" value="Save" id="button1" />
</form>



