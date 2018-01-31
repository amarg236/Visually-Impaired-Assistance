<?php
require("connect.php");
$id =$_REQUEST['sn'];

$result = mysql_query("SELECT * FROM news WHERE sn  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$news_title=$test['news_title'] ;
				$news= $test['news'] ;					
if(isset($_POST['save']))
{	
	$news_title_save= $_POST['news_title'];
	$news_save = $_POST['copy'];

mysql_query("UPDATE news SET news_title ='$news_title_save', news ='$news_save' WHERE sn = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: admin.php?id=1");			
}
mysql_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="./ckeditor/ckeditor.js"></script>
</head>

<body>
<form method="post">
Question Type:
<select name="question_type">
    <?php
	$result=mysql_query("SELECT * FROM sat_test");
	  while($test = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $test["c_id"]; ?>'><?php echo $test["c_name"]; ?></option>;
      <?php }
      ?>
</select>
	  
      <?php
	  $result=mysql_query("SELECT * FROM district where district_id<>$district");
	  while($testz = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $testz["district_id"]; ?>
	  
	  
<input name="test_type" type="text" value="<?php echo $news_title; ?>" size="100" maxlength="100" />
<textarea name="copy" id="copy"><?php echo $news; ?></textarea> 
<input type="submit" name="save" value="save" />
</body>
</html>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'copy' );
CKFinder.setupCKEditor( editor, '/ckfinder/' );
</script>