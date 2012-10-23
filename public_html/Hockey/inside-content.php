<link rel="stylesheet" href="../css/inside-content-style.php" media="screen">
<div id="inside_content">
<?php 
    $link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
	    or die('Could not connect ' . $mysql_host . ' ' . $mysql_user . ' : ' . mysql_error());
	mysql_select_db($mysql_database) 
		or die('Could not select database');

	$query = 'SELECT `id` FROM `Sports` WHERE `name`=\'Hockey\'';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	
	$num = mysql_numrows($result);
	if ($num == 0) {
		die('Invalid location');
	}

	$sport_id = mysql_result($result, 0, "id");

	$query = 'SELECT `photo_src`, `headline`, `short_story` FROM `Story1` WHERE `sport_id` = ' . $sport_id . ' ORDER BY `time` DESC';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>
<table>
<tr><td>
<table>
	<tr><td class="top_news_box" width="50%">
<?php
		echo "<p class=\"top_news_headlines\">" . mysql_result($result, 0, "headline") . "</p>";
		$img_src=mysql_result($result, 0, "photo_src");
		if("$img_src" != "") {
			$img_src = "../" . $img_src;
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p class=\"top_news_short_story\">" . mysql_result($result, 0, "short_story") . "</p>";
?>			
	</td><td class="top_news_box" width="50%">
<?php
		echo "<p class=\"top_news_headlines\">" . mysql_result($result, 1, "headline") . "</p>";
		$img_src=mysql_result($result, 1, "photo_src");
		if("$img_src" != "") {
			$img_src = "../" . $img_src;
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p class=\"top_news_short_story\">" . mysql_result($result, 1, "short_story") . "</p>";
?>
	</td></tr>	
	<tr><td class="top_news_box" width="50%">
<?php
		echo "<p class=\"top_news_headlines\">" . mysql_result($result, 2, "headline") . "</p>";
		$img_src=mysql_result($result, 2, "photo_src");
		if("$img_src" != "") {
			$img_src = "../" . $img_src;
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p class=\"top_news_short_story\">" . mysql_result($result, 2, "short_story") . "</p>";
?>			
	</td><td class="top_news_box" width="50%">
<?php
		echo "<p class=\"top_news_headlines\">" . mysql_result($result, 3, "headline") . "</p>";
		$img_src=mysql_result($result, 3, "photo_src");
		if("$img_src" != "") {
			$img_src = "../" . $img_src;
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p class=\"top_news_short_story\">" . mysql_result($result, 3, "short_story") . "</p>";
?>
	</td></tr>
	<tr><td class="top_news_box" width="50%">
<?php
		echo "<p class=\"top_news_headlines\">" . mysql_result($result, 4, "headline") . "</p>";
		$img_src=mysql_result($result, 4, "photo_src");
		if("$img_src" != "") {
			$img_src = "../" . $img_src;
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p class=\"top_news_short_story\">" . mysql_result($result, 4, "short_story") . "</p>";
?>			
	</td><td class="top_news_box" width="50%">
<?php
		echo "<p class=\"top_news_headlines\">" . mysql_result($result, 5, "headline") . "</p>";
		$img_src=mysql_result($result, 5, "photo_src");
		if("$img_src" != "") {
			$img_src = "../" . $img_src;
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p class=\"top_news_short_story\">" . mysql_result($result, 5, "short_story") . "</p>";
		echo mysql_numrows($result);
?>
	</td></tr>
</table></td><td width="30%">
<table class="sidebar_table"><tr><td class="sidebar_table_header">Other Top Stories</td></tr>
<?php
		$num=mysql_numrows($result);
		$i=6;
		while ($i < $num) {
			echo "<tr><td class=\"sidebar_table_body\">";
			echo mysql_result($result, $i, "headline");
			echo "</td></tr>";
			$i++;
		} 
		mysql_close($link);
?>
</table>
</table>
</div>	