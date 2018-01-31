
<html>
 	<head>
		<script src="js/recorder.js"></script>
		<script src="js/Fr.voice.js"></script>
    <script src="js/jquery.js"></script>
		<script src="js/record.js"></script>
 	</head>
	<body>
<div style="font-size:24px;background-color:#ddd;"><div style="background-color:gray;"><div style="background-color:gray;height:90px; width:100%;">
<br>
Enter Your name:<input type="text" name="name" style="width:400px;height:40px;"></div><br>
<div style="background-color:gray;height:60px; width:100%;">Date of Birth :<input type="date" name="name"  style="width:400px;height:40px;"></div><br>
<div style="background-color:gray;height:60px; width:100%;">Gender: <select name="gender"><option value="male">Male</option><option value="female"Female"></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Profession:<input type="text" name="profession"></div></div><br>
<br>
<b>Following sample task should be done and get authenticated by the admin  !</b><br><br>
<div>
This app is to solve the problem of visually impaired students preparing for the various standardized tests like SAT, TOEFL. Because only limited Braille books are available for visually impaired students to get prepared for those standardized tests. More over practicing with such materials are time consuming and boring and expensive. Because of which most of the blind students are discouraged to terminate their dream of studying abroad and dream college.  So we are going to solve this problem of preparing for such standardized test by making visually impaired user friendly and interactive windows store app equipped with speech features which will encourage such students to continue their study and get prepared for those tests as the normal students do.
With this app, He/She can practice well. The reading passages in the test samples will be automatically recited by the app. And various instructions will also be told  along with the various option followed by the correct answer at the last as per the rules and guidelines of the respective test.
There will be the 3 kinds of users: one is the student who is visually impaired; another is the volunteer and the last one is the main administratir. The role of the admin is to prepare the standarized tests  questions and provide to the volunteers. The role of the volunteer is to read those questions provided by the admin and record it. The admin and the volunteer will perform their task in web platform via website. The user(visually impaired student) will get those files recorded from the windows 8.1 app and practise for the test.In this way, this app will assist the blind student to prepare for the test. Most of the passage based reading portion. There will be timed practice test. 
In this way, this app will assist visually impaired students.
This app will generate a new hope and enthuse among such students with such disability. 
<hr>


</div>
		<audio controls src="" id="audio" ></audio>
		<div style="margin:10px;">
			<a class="button" id="record">Record</a>
			<a class="button disabled one" id="stop">Reset</a>
			<a class="button disabled one" id="play">Play</a>
			<a class="button" id="download">Upload</a>
			
		</div>
	

<div style="width:100%x;;background-color:gray;text-align:center;"><input type="button" name="submit" value="SUBMIT THE TASK" style="width:400px;height:50px;"></div>
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
