<?php
	if (isset($_POST["submit"])) {
	include('connect.php');
	$file=$_FILES['image']['tmp_name'];
	$file2=$_FILES['logo']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$logo= addslashes(file_get_contents($_FILES['logo']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$logo_name= addslashes($_FILES['logo']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/institution_photo/" . $_FILES["image"]["name"]);
			move_uploaded_file($_FILES["logo"]["tmp_name"],"photos/institution_logo/" . $_FILES["logo"]["name"]);
			
			$location="photos/institution_photo/" . $_FILES["image"]["name"];
			$location_logo="photos/institution_logo/" . $_FILES["logo"]["name"];
			$ins_category=$_POST["category"];
			$ins_name=$_POST["ins_name"];
			$ins_address=$_POST["ins_address"];
			$district=$_POST["district"];
			$ins_contact=$_POST["ins_contact"];
			$ins_description=$_POST["copy"];
			$zone=mysql_query("SELECT * FROM district");
			while($zoon=mysql_fetch_array($zone))
				{
				if($district==$zoon["district_id"]){
				$zone_id=$zoon["zone_id"];
				}
				}
			$ins_description=$_POST["copy"];
			mysql_query("INSERT INTO `institutions`(category,ins_name,ins_address,zone_id,district_id,ins_contact,ins_description,ins_photo_url,ins_logo_url,ins_date_of_post) 
					VALUES ('$ins_category','$ins_name','$ins_address','$zone_id','$district','$ins_contact','$ins_description','$location','$location_logo',now())");
			header("location: admin.php?id=6");			
	}
	else
	{?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

<form name="institutions" method="post" enctype="multipart/form-data">
      <?php include "connect.php";
?>
  <table width="728" border="1" align="center">
    <tr>
      <td width="477" align="left">Category</td>
      <td width="241" align="left">
      <select name="category">

    <?php
	$result=mysql_query("SELECT * FROM category");
	  while($test = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $test["c_id"]; ?>'><?php echo $test["c_name"]; ?></option>;
      <?php }
      ?>
      </select></td>
    
    
    </tr>
        <tr>
      <td align="left">Institution Name</td>
      <td align="left"><input type="text" name="ins_name" /></td>
    </tr>
    <tr>
      <td align="left">Institution Address</td>
      <td align="left"><input type="text" name="ins_address" /></td>
    </tr>
    <tr>
      <td align="left">District</td>
      <td align="left"><select name="district">
      <?php
	  $result=mysql_query("SELECT * FROM district");
	  while($test = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $test["district_id"]; ?>'><?php echo $test["district_name"]; ?></option>;
      <?php }
      ?>
      </select>
	      </td>
    </tr>
    <tr>
      <td align="left">Contact No.</td>
      <td align="left"><input type="text" name="ins_contact" /></td>
    </tr>
    <tr>
      <td align="left">Upload the photo of institution</td>
      <td align="left"><input type="file" name="image" /></td>
    </tr>
    <tr>
      <td align="left">Upload the logo of the institution</td>
      <td align="left"><input type="file" name="logo" /></td>
    </tr>
    <tr>
      <td colspan="2" align="left">  
      <textarea name="copy" id="copy" >
  
  </textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><input type="submit" name="submit" value="Submit"/></td>
    </tr>
  </table>
  <p>
    <script type="text/javascript">var editor = CKEDITOR.replace( 'copy' );
CKFinder.setupCKEditor( editor, '/ckfinder/' );
    </script>
  </p>
</form>
<?php
}
?>
<div class="admin_body_titlebar">INSTITUTIONS DETAILS</div>
<table border=".5" align="center" bgcolor="#CC9966" width="800">
			<?php
			include("connect.php");			
			$result=mysql_query("SELECT * FROM institutions");
			while($test = mysql_fetch_array($result))
			{	
			$id=$test["ins_id"];
			?>
                <div class="ins_details">
                	<div class="ins_up">
                    	<div class="ins_up_left">
                        	<div class="ins_up_left_name"><?php echo $test['ins_name']; ?> </div>
                            <div class="ins_up_left_photo"><?php echo "<img src='".$test['ins_photo_url']."' width=500px height=350px>"; ?></div>
                            <div class="ins_up_left_down"><?php echo  $test['ins_description']; ?></div>
                        </div>
                        <div class="ins_up_right">
                        	<div class="ins_up_right_logo"><?php echo "<img src='".$test['ins_logo_url']."' width=200px height=200px>"; ?></div>
                            <div class="ins_up_right_address><?php echo $test['ins_address']; ?></div>
                            <div class="ins_up_right_district">District:-
                            	<?php $dis=mysql_query("SELECT * FROM district");
								while($testo = mysql_fetch_array($dis))
									{
										if($test["district_id"]==$testo["district_id"]){
										echo $testo["district_name"];
										}
									}
									?>
                            </div>
                            <div class="ins_up_right_zone">
                      	                <?php $dis=mysql_query("SELECT * FROM zone");
								while($testo = mysql_fetch_array($dis))
									{
										if($test["zone_id"]==$testo["zone_id"]){
										echo $testo["zone_name"];
										}
									}
									?>
                            </div>
                            <div class="ins_up_right_phone">Contact no:<?php echo $test['ins_contact']; ?></div>
                        </div>
                    </div>
                    <div class="ins_down">
                    	<div class="ins_down_box"><?php echo $test['ins_date_of_post']; ?></div>
                        <div class="ins_down_box"><?php echo "<a href ='view_institution.php?sn=$id'>Edit</a>";?></div>
                        <div class="ins_down_box"><?php echo "<a href ='del_institution.php?sn=$id'><center>Delete</center></a>";?></div>
                    </div>
           		</div>
				<?php
			}
			?>

</table>
	
</body>
</html>
