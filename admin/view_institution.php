<?php
require("connect.php");
$id =$_REQUEST['sn'];
$result = mysql_query("SELECT * FROM institutions WHERE ins_id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
$ins_category=$test["category"];
$ins_name=$test["ins_name"];
$ins_address=$test["ins_address"];	
$district=$test["district_id"];
$ins_contact=$test["ins_contact"];
$ins_description=$test["ins_description"];
if(isset($_POST['save']))
{
$ins_category=$_POST["category"];
$ins_name=$_POST["ins_name"];
$ins_address=$_POST["ins_address"];
$ins_contact=$_POST["ins_contact"];	
$district=$_POST["district"];
$zone=mysql_query("SELECT * FROM institutions");
			while($zoon=mysql_fetch_array($zone))
				{
				if($district==$zoon["district_id"])
				{
				$zone_id=$zoon["zone_id"];
				}
				}
$ins_description=$_POST["copy"];
mysql_query("UPDATE institutions SET ins_name ='$ins_name', ins_address ='$ins_address',zone_id='$zone_id',district_id ='$district',ins_contact ='$ins_contact',ins_description ='$ins_description',category='$ins_category' WHERE ins_id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: admin.php?id=6");			
}
mysql_close($con);
?>
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
      <td align="left"><input type="text" name="ins_name" value="<?php echo $ins_name; ?>" /></td>
    </tr>
    <tr>
      <td align="left">Institution Address</td>
      <td align="left"><input type="text" name="ins_address" value="<?php echo $ins_address; ?>" /></td>
    </tr>
    <tr>
      <td align="left">District</td>
      <td align="left"><select name="district">
  	  <option value='<?php echo $test["district_id"]; ?>' selected="selected">
	  		<?php $resultq=mysql_query("SELECT * FROM district where district_id=$district");
			$testq = mysql_fetch_array($resultq);
			 echo $testq["district_name"]; ?>
      </option>;
      <?php
	  $result=mysql_query("SELECT * FROM district where district_id<>$district");
	  while($testz = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $testz["district_id"]; ?>'><?php echo $testz["district_name"]; ?></option>;
      <?php }
      ?>
      </select>
	      </td>
    </tr>
    <tr>
      <td align="left">Contact No.</td>
      <td align="left"><input type="text" name="ins_contact" value="<?php echo $ins_contact; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="left">  
      <textarea name="copy" id="copy">
  <?php echo $ins_description; ?>
  </textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="left"><input type="submit" name="save" value="Save"/></td>
    </tr>
  </table>
  <p>
    <script type="text/javascript">var editor = CKEDITOR.replace( 'copy' );
CKFinder.setupCKEditor( editor, '/ckfinder/' );
    </script>
  </p>
</form>