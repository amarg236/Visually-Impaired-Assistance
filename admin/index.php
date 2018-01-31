<?php
session_unset();
?>
<?php
include "connect.php";
if (isset($_POST['submit']))
{
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['userpass'] = $_POST['password'];
$_SESSION['authuser'] = 0;
$result=mysql_query("SELECT username,password from vis_assistant");
while ($row=mysql_fetch_array($result))
{
$a=$row['username'];
$b=$row['password'];
if ($_SESSION['username']==$a and $_SESSION['userpass']==$b)
{
$_SESSION['authuser']=1;
header("location:admin.php?id=''");
}
else
{
echo "Password Wrong</br></br></br>";
echo "<a href='index.php'>TRY AGAIN!</a>";
}
}
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In -- HSK.COM</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>

<body bgcolor="#d3c67b">


<div style=" background-color:#c5f7aa;width:500px; margin:auto; margin-top:200px; height:300px;">
	<form name="volunteer_form" method="post" >
	<div style="text-align:center;background-color:#4dbc81; font-size:45px;color:yellow;font-size:strong;border-top:3px solid #4dbc81;">LOGIN</div>
    <div style="font-size:30px; text-align:center; height:100px;margin-top:35px;">
<table align="center">
<tr><td>A/C Type:</td><td><select name="admin_type" style="width:302px;margin-left:6px; height:30px;" >
  <option value="1">Admin</option>
</select> <br />
</td></tr>
<tr><td>
    Username:</td><td><input type="text" name="username" size="40" style="width:300px; height:30px;"/></td>
   <tr><td> Password:</td><td><input type="password" name="password" style="width:300px; height:30px;"/></td>
<tr><td colspan="2">    <input type="submit" name="submit" value="Submit" style="width:200px; height:45px; margin-top:15px;"/></td></tr>
</table>
    <div style="background-color:#a6f1c9;margin-top:30px;height:60px;"><a href="#">Forget Password?</a></div>
	</div>
    
	</form>
</div>

</body>
</html>
<?php
}
exit();
?>