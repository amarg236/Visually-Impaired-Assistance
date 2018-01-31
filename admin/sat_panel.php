<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAT PREP</title>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form style="margin-top:5px;" name="sat_panel" method="post" align="left" >
<div style="text-align:center;background-color:#4dbc81; font-size:45px;color:yellow;font-size:strong;border-top:3px solid #4dbc81;">
<div style="height:50px; width:1000px;text-align:left;margin-left:10px;">Question Type:
<select name="question_type" style="width:500px; height:50px;margin-left:70px;">
    <?php
	include 'connect.php';
	$result=mysql_query("SELECT * FROM question_type");
	  while($test = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $test["sn"]; ?>'><?php echo $test["question_name"]; ?></option>;
      <?php }
      ?>
</select><br>
</div ><div style="height:50px; width:1000px;text-align:left;margin-left:10px;margin-top:15px;">
Exercise No:<input name="exercise_no" type="text" size="8" maxlength="100"  style="width:500px; height:50px;margin-left:125px;"/></div><br>
<div >Instruction 1:<textarea name="instruction1" rows="8" cols="123"></textarea><hr><br>
Instruction 2:<textarea name="instruction2" rows="5" cols="123"></textarea><br>
<br>
Paragraph:
<textarea name="copy" id="copy"></textarea><br>
No of Questions You want to input:<select name="questions" style="width:200px; height:50px;">
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
<option value="4">Four</option>
<option value="5">Five</option>
<option value="6">Six</option>
<option value="7">Sven</option>
<option value="8">Eight</option>
<option value="9">Nine</option>
<option value="10">Ten</option>
<option value="11">Eleven</option>
<option value="12">Twelve</option>
<option value="13">Thirteen</option>
<option value="14">Fourteen</option>
</select>
<div style="width:1000px;background-color:#ddd;"><input type="submit" name="submit" value="Proceed" style="width:200px; height:50px;"/></div>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'copy' );
CKFinder.setupCKEditor( editor, '/ckfinder/' );
</script>
<div>

</div>
</div>

</form>

<?php
if (isset($_POST['submit']))
	{

	$result=mysql_query("SELECT * FROM question_type");
	  while($test = mysql_fetch_array($result))
      { 
	  if($test["question_name"]="Short Question")
	  {
		 $question_tpe="Short Question"; 

	  }
	  elseif($test["question_name"]="Long Question")
	  {
		$question_tpe="Long Question";
	  }
	  elseif($test["question_name"]="Sentence Completion")
	  {
		$question_tpe="Sentence Completion";
	  }
	  else
	  echo "Error";
	}
					
					$test_type="SAT";
					$Q_type=$_POST["question_type"];
					$Ex_type=$_POST['exercise_no'];
					$intro1=$_POST['instruction1'];
					$intro2=$_POST['instruction2'];
					$passage=$_POST['copy'];

					
					mysql_query("INSERT INTO `sat_test`( SN, test_type, question_type, exercise_no, instruction1, instruction2, paragraph) 
					VALUES ('NULL', 'SAT','$Q_type','$Ex_type','$intro1','$intro2','$passage')");						
					
	}



?>

	
</body>
</html>
