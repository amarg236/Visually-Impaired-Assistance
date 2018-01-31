<?php
include('connect.php');
if (isset($_FILES['image']['tmp_name'])) {
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$caption=$_POST["caption"];
			mysql_query("INSERT INTO `slider_image`(image_location,image_caption,date) 
					VALUES ('$location','$caption',now())");
			header("location: admin.php?id=2");			
	}
	else
	{
?>
<div class="slider_image_uploader">
<form method="post" enctype="multipart/form-data" name="slider_image">
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 Caption:
 <input name="caption" type="text" class="ed" id="brnu" size="100" maxlength="100" />
 <br />
 <input type="submit" name="image" value="Upload" id="button1" />
</form>
</div>
<table border="1" align="center">
<?php
	}
include('connect.php');
$result = mysql_query("SELECT * FROM slider_image");
echo "<font color='white'>Only the captions can be edited ||| Image size should be 590px*300px</font>";
while($row = mysql_fetch_array($result))
{
$img_id=$row["image_id"];	
echo '<tr>';
echo '<td><img src="'.$row['image_location'].'" width=400 height=200></td>';
echo '<td>'.$row['image_caption'].'</td>';
echo "<td><a href='view_image.php?image_id=$img_id'>Edit</a></td><td><a href='del_image.php?img_id=$img_id'>Delete</a></td>";
echo '</tr>';
}
?>
</table>