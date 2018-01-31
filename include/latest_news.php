<div class="latest_news_label">
LATEST UPDATES
</div>
<div class="latest_news_content">
<marquee behavior="scroll" scrollamount="2" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
<?php
include 'admin/connect.php';
include 'function.php';
$query=mysql_query("select * from news");
while($row=mysql_fetch_array($query))
{
$news_id=$row["sn"];
$news_title=$row["news_title"];
$new=$row["news"];
echo "<div class='latest_news_content_title'>";
echo $news_title;
echo '</div>';
echo "<div class='latest_news_content_news'>";
echo limit_words($new,10)."......<a href='include/news.php?news_id=$news_id'>Read More</a> ";
echo "</div>";
}	
?>
</marquee>
</div>