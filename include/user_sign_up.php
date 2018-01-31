
<html>
 	<head>
		<script src="js/recorder.js"></script>
		<script src="js/Fr.voice.js"></script>
    <script src="js/jquery.js"></script>
		<script src="js/record.js"></script>
 	</head>
	<body>
<div style="margin-left:auto; text-align:center; font-size:24px;background-color:#ddd;">
<?php
	include 'connect.php';
	$result=mysql_query("SELECT * FROM sat_test where exercise_no=1");
	  while($test = mysql_fetch_array($result))
      { 
	?></br><div style="float:left; display:inline;"><b>Test Type:</b><i><?php echo $test["test_type"];
	?></i></br></div><div style="float:left; display:inline;margin-left:500px;"><b>Question Type:</b><i><?php  echo $test["question_type"];
	?></i></br></div><div style="float:right; display:inline;"><b>Exercise No:</b><i><?php echo $test["exercise_no"];
	?></i></br></div><br><hr><hr><div style="float:left;"><b>Instruction1:</b><i><?php echo $test["instruction1"];
	?></i></br></div><br><br><br>
		<audio controls src="" id="audio"></audio>
		<div style="margin:10px;">
			<a class="button" id="record">Record</a>
			<a class="button disabled one" id="stop">Reset</a>
			<a class="button disabled one" id="play">Play</a>
			<a class="button" id="download">Upload</a>
			
		</div><hr><div style="float:left;"><b>Instruction2:</b><i><?php echo $test["instruction1"];
	?></i></br><br>
	<audio controls src="" id="audio"></audio>
		<div style="margin:10px;">
			<a class="button" id="record">Record</a>
			<a class="button disabled one" id="stop">Reset</a>
			<a class="button disabled one" id="play">Play</a>
			<a class="button" id="download">Upload</a>
			
		</div>
		<hr>
	<div style="margin:10px;background-color:#ddd;"><b>Paragraph:</b><i><?php echo $test["paragraph"];	  
	  ?> <br><br>
	  <audio controls src="" id="audio"></audio>
		<div style="margin:10px;">
			<a class="button" id="record">Record</a>
			<a class="button disabled one" id="stop">Reset</a>
			<a class="button disabled one" id="play">Play</a>
			<a class="button" id="download">Upload</a>
			
		</div></div><?php
	  }
?> 
<br>
<div><input type="button" name="submit" value="SUBMIT THE TASK"></div>
<br>
<br>
</div>
		<style>
		.button{
			display: inline-block;
			vertical-align: middle;
			margin: 0px 5px;
			padding: 5px 12px;
			cursor: pointer;
			outline: none;
			font-size: 13px;
			text-decoration: none !important;
			text-align: center;
			color:#fff;
			background-color: #4D90FE;
			background-image: linear-gradient(top,#4D90FE, #4787ED);
			background-image: -ms-linear-gradient(top,#4D90FE, #4787ED);
			background-image: -o-linear-gradient(top,#4D90FE, #4787ED);
			background-image: linear-gradient(top,#4D90FE, #4787ED);
			border: 1px solid #4787ED;
			box-shadow: 0 1px 3px #BFBFBF;
		}
		a.button{
			color: #fff;
		}
		.button:hover{
			box-shadow: inset 0px 1px 1px #8C8C8C;
		}
		.button.disabled{
			box-shadow:none;
			opacity:0.7;
		}
		</style>
 	</body>
</html>
