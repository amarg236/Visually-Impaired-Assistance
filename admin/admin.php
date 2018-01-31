<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>

<body bgcolor="#c0ca33">
<div style="width:1000px; margin-left:auto;margin-right:auto;">
	<div style="width:auto;font-size:30px;text-align:center;font-family:'Goudy Stout';">Admin Panel</div>
    <div style="font-size:35px;width:1000px; border-top:5px solid ;border-bottom:10px solid ;height:60px; text-align:center;margin-top:5px; font-weight:bold;">
    <div style="margin-top:8px;"><a href="admin.php?id=1">SAT</a> |<a href="admin.php?id=6">TOEFL</a></div></div>
    <div style=" background-color:#ddd;height:300px;">
    <?php 
	$id =$_REQUEST['id'];
    if($id==1)
	{
		include "sat_panel.php";
	}
		elseif($id==6)
	{
		include "toefl_panel.php";
	}
	else
	{
		echo "<font color='#FFFFFF'>"."WELCOME TO THE ADMIN PANEL!".'</font>';
	}
	?>

    </div>
    <div><a href="index.php"<?php session_unset(); ?>>Sign Out</a></div>
</div>
</body>
</html>
