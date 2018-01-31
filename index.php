<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VISAssistant.COM</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php include 'include/add_left_right.php'; ?>
<?php include 'include/social_media.php'; ?>
    <div class="wrapper">
		<?php echo "<img src='images/page_header.jpg'>"; ?>
        <div class="menubar_horizontal">
        	        	<?php include "include/menubar_horizontal.php"; ?>
        </div>
    	<div class="middle_body" >
        	<div class="middle_mid_body" >
        		
                <div class="add_left_middle_mid_body_right" >
            		    <?php
if(isset($_REQUEST["show"]))
{
	/*if(file_exists('include/'.'$_REQUEST["show"].".php"'))
	{
		include('include/'.'$_REQUEST["show"].".php"');
	}
	else
	{
		include("include/home.php");
	}*/
	if($_REQUEST["show"]=="volunteer_sign_in")
	{
		include 'include/volunteer_sign_in.php';
	}
	elseif($_REQUEST["show"]=="signUp")
	{
		include 'include/signUp.php';
	}
}
?>
                   
                </div>    
            </div>
   		</div>
    </div>

</body>
</html>
