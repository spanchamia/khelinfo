<?php
	echo "<link rel=\"stylesheet\" href=\"" . $top_level_dir . "/css/style.php\" media=\"screen\" />";
?>

<div id="content_top_row">
	Welcome to Khel India!!!

<?php
	$modified_title_string = str_replace(" ", "+", $title_string);
	$ttr_string = "https://twitter.com/intent/tweet?url=http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'] . "&text=" . $modified_title_string . "&hashtags=khelindia";
	echo "<a href=\"" . $ttr_string . "\" target=\"_blank\">";
	echo "<img src=\"" . $top_level_dir . "/images/ttr.png\" align=\"right\" height=\"25px\"></img>";
	echo "</a>";
	$fb_string = "http://www.facebook.com/sharer/sharer.php?u=http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
	echo "<a href=\"" . $fb_string . "\" target=\"_blank\">";
	echo "<img src=\"" . $top_level_dir . "/images/fb.png\" align=\"right\" height=\"25px\"></img>";
	echo "</a>";
?>
</div>				