<?php
if(isset($_POST["submit"])){
$username=$_POST["username"];
$password=$_POST["password"];
$admin_type=$_POST["admin_type"];
$query="select username,password from  vis_assistant where admin_type='$admin_type'";
$query=mysql_query($query);
$row=mysql_fetch_assoc($query);
echo "<br>";
If($username==$row["username"]&&$password==$row["password"])
   {
	   header( 'Location:admin.php' );
   }
   else
   {
 exit();
   }
}
else
{
exit();
}
?>
