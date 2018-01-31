<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HAMROSHIKSHYA.COM</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/hamroshikshya/include/add_left_right.php'); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/hamroshikshya/include/social_media.php'); ?>
    <div class="wrapper">
<div class="header">
        	<div class="header_logo"><img src="../images/hsk.png" /></div>
            <div class="header_add"></div>
        </div>
        <div class="menubar_horizontal">
        	        	<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/hamroshikshya/include/menubar_horizontal.php'); ?>
        </div>
    	<div class="middle_body">
        <div class="add_news"></div>
          <div class="news_all">
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/hamroshikshya/admin/connect.php');		
$news_id=$_REQUEST['news_id'];	
$query=mysql_query("select * from news");
while($row=mysql_fetch_array($query))
{
$new_id=$row["sn"];
if($news_id==$new_id)
{
$news_title=$row["news_title"];
$new=$row["news"];
echo "<div><b>";
echo $news_title;
echo '</b></div>';
echo "<div>";
echo $new;
echo "</div><hr>";
}
}
$query=mysql_query("select * from news where sn<>'$news_id'");
while($row=mysql_fetch_array($query))
{
$news_id=$row["sn"];
$news_title=$row["news_title"];
$new=$row["news"];
echo "<div><b>";
echo $news_title;
echo '</b></div>';
echo "<div>";
echo $new;
echo "</div><hr>";
}	
?>	


  
  		</div>

    </div>
</body>
</html>


