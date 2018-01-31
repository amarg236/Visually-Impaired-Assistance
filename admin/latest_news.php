<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAT PREP</title>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form method="post" align="left">
Question Type:
<select name="question_type">
    <?php
	require("connect.php");
	$result=mysql_query("SELECT * FROM question_type");
	  while($test = mysql_fetch_array($result))
      { ?>
	  <option value='<?php echo $test["sn"]; ?>'><?php echo $test["question_name"]; ?></option>;
      <?php }
      ?>
</select><br>
Exercise No:<input name="exercise_no" type="text" size="5" maxlength="100" /><br>
Instruction 1:<textarea name="instruction1" rows="3" cols="106"></textarea><br>
Instruction 2:<textarea name="instruction2" rows="3" cols="106"></textarea><br>
<br>
Paragraph:
<textarea name="copy" id="copy"></textarea><br>
<div style="margin-left:45px;">
  <input type="checkbox" name="qu[]" value="q1">
Question 1:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q2">
Question 2:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q3">
Question 3:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q4">
Question 4:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q5">
Question 5:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q6">
Question 6:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q7">
Question 7:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q8">
Question 8:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q9">
Question 9:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q10">
Question 11:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q11">
Question 12:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
  <input type="checkbox" name="qu[]" value="q12">
Question 13:<textarea name="question1" type="text" size="60" rows="5" cols="95" maxlength="400" ></textarea><br>
Option 1:<input name="option1" type="text" size="60" maxlength="400" /><br>
Option 2:<input name="option2" type="text" size="60" maxlength="400" /><br>
Option 3:<input name="option3" type="text" size="60" maxlength="400" /><br>
Option 4:<input name="option4" type="text" size="60" maxlength="400" /><br>
<hr>
</div>
<div class="admin_body_titlebar"><input type="submit" name="submit" value="submit" /></div>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'copy' );
CKFinder.setupCKEditor( editor, '/ckfinder/' );
</script>
</form>

<?php
if (isset($_POST['submit']))
	{

	$result=mysql_query("SELECT * FROM question_type");
	  while($test = mysql_fetch_array($result))
      { 
	  if($test["question_name"]=="Short Question")
	  {
		 $question_tpe=$test["sn"]; 

	  }
	  elseif($test["question_name"]="Long Question")
	  {
		$question_tpe==$test['sn'];
	  }
	  elseif($test["question_name"]="Sentence Completion")
	  {
		$question_tpe==$test['sn'];
	  }
	  else
	  echo "Error";
	}

					include 'connect.php';
					$test_type="SAT";
					$Q_type=$_POST[$question_tpe];
					$Ex_type=$_POST['exercise_no'];
					$intro1=$_POST['instruction1'];
					$intro2=$_POST['instruction2'];
					$passage=$POST['copy'];
					$option1=$POST['option1'];
					$option2=$POST['option1'];
					$option3=$POST['option1'];
					$option4=$POST['option1'];
					if(isset($_POST['animal'])){
    foreach($_POST['qu'] as $qu){
						mysql_query("INSERT INTO `sat_test`(test_type,question_name, exercise_no,instruction1,instruction2, paragraph,option1,option2, option3, option4) 
					VALUES ('1','$Q_type','$Ex_type','$intro1','$intro2','$passage','$option1','$option2','$option3','$option4')"); 
    }
	Echo "Data SAVED";
}

}
?>

	
</body>
</html>
