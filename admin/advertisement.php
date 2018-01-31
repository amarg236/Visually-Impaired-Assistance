<a href="?add=1">Banner Add</a>|
<a href="?add=2">Left Side Add</a>|
<a href="?add=3">Right Side Add</a>|
<?php
if(isset($_REQUEST["add"]))
{
if($_REQUEST["add"]==1){
echo "Banner Add";
}
elseif($_REQUEST["add"]==2){
echo "Left Side Add";
}
elseif($_REQUEST["add"]==3){
echo "Right side Banner";
}
else
{
echo "Banner add";
}
}
?>