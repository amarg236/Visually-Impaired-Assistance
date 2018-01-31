<link rel="stylesheet" type="text/css" href="style.css">
								<div><h2>Subject Notes <a href="#">Get More</a></h2>
								<ul>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/hamroshikshya/admin/connect.php');		
$query=mysql_query("select * from news limit 0,3");
while($row=mysql_fetch_array($query))
{
$news_id=$row["sn"];
$news_title=$row["news_title"];
echo "<li><a href='".$news_id."'>";
echo $news_title.".";
echo "</a></li>";
}	
?>
</ul></div>