<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In -- HSK.COM</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>

<body>

<div class="admin_form">
	<form name="admin_form" method="post">
	<div class="admin_form_title">LOGIN</div>
    <div class="admin_form_body">
Account Type:<select name="admin_type">
  <option value="Admin">1</option>
</select> <br />
    Username:<input type="text" name="username" /><br />
    Password:<input type="password" name="password" /><br />
    <input type="submit" value="Submit" />
    </div>
    <div class="admin_form_footer"><a href="#">Forget Password?</a></div>
	</form>
</div>
<?php
include "connect.php"; 
include "volunteer_cpanel.php";
?>

</body>
</html>