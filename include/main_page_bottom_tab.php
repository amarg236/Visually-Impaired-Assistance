<link rel="stylesheet" type="text/css" href="../style.css">
<div>
	<div class="index_tab_wrapper">
    	<div class="index_tab_menubar">
        	<ul>
            	<li><a href="?tab=jokes">Jokes</a></li>
                <li><a href="?tab=articles">Articles</a></li>
                <li><a href="?tab=stories">Stories</a></li>
           	</ul>
        </div>
        <div class="tab_content">
        	 <?php
if(isset($_REQUEST["tab"]))
{
	if($_REQUEST["tab"]=="articles")
	{
		include 'include/articles.php';
	}
	elseif($_REQUEST["tab"]=="stories")
	{
		include 'include/stories.php';
	}
	else
	{
		include 'include/jokes.php';
	}
}
else
{
	include("include/jokes.php");
}
?>
        </div>
 	</div>
</div>
