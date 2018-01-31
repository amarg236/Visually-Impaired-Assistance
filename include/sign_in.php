<div>
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
$result=mysql_query("SELECT username,password from logina_admina");
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

<body>

<div class="admin_form">
	<form name="admin_form" method="post">
	<div class="admin_form_title">LOGIN</div>
    <div class="adimin_form_body">
Account Type:<select name="admin_type">
  <option value="1">Admin</option>
  <option value="2">Author</option>
</select> <br />
    Username:<input type="text" name="username" /><br />
    Password:<input type="password" name="password" /><br />
    <input type="submit" name="submit" value="Submit" />
    </div>
    <div class="admin_form_footer"><a href="#">Forget Password?</a></div>
	</form>
</div>
</body>
</html>
<?php
}
exit();
?>

</div>