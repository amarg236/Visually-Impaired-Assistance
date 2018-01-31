<?php 
$username="root";/*gurung*/
$password="";/*nepal123!@#*/
$server="localhost";/*ustvnf3x46.database.secure.windows.net*/
$con = mysql_connect($server,$username,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("visassistant",$con) or die();
?>