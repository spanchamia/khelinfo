<link rel="stylesheet" href="css/inside-index-style.php" media="screen">
<div id="header" width="100%">
<script language="javascript" type="text/javascript">
    function makeActive(tab) { 
        document.getElementById('news').style.paddingBottom = "0px";
        document.getElementById('blogs').style.paddingBottom = "0px";
        document.getElementById('inside_content_news').style.display = "none";
        document.getElementById('inside_content_blogs').style.display = "none";
        document.getElementById(tab).style.paddingBottom = "2px";
        document.getElementById(tab).style.background = "white";
        document.getElementById("inside_content_" + tab).style.display = "block";
    } 
</script>
<ul>
	<li class="inside_content_link selected" id="news" onclick="makeActive('news');"><a href="#">News</a></li>
	<li class="inside_content_link" id="blogs" onclick="makeActive('blogs')"><a href="#">Blogs</a></li>
</ul>
</div>
<div class="inside_content" id="inside_content_news">
<?php 

    $link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
	    or die('Could not connect ' . $mysql_host . ' ' . $mysql_user . ' : ' . mysql_error());
	mysql_select_db($mysql_database) 
		or die('Could not select database');

	$home = 'Home';

	if (("$sport_id" != "") || ("$event_id" != "")) {
		$home = '';
	}
	$query = 'SELECT `Story1`.`id`, `Story1`.`photo_src`, `Story1`.`headline`, `Story1`.`short_story`,`Sports`.`name`, `Events`.`name` FROM `Story1`,`Sports`,`Events` WHERE `Sports`.`id`=`Story1`.`sport_id` AND `Events`.`id` = `Story1`.`event_id`';
	if ("$sport_id" != "") {
		$query = $query . ' AND `sport_id`=' . $sport_id . ' ';
	}
	else if ("$event_id" != "") {
		$query = $query . ' AND `event_id`=' . $event_id . ' ';
	}
	$query = $query . ' ORDER BY `time` DESC';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>
<table>
<tr><td width="35%" valign="top">
<table>
	<tr>
<?php
	if (mysql_numrows($result) > 0) {
		echo "<td class=\"top_news_box_1\" width=\"50%\">";
		echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, 0, "Story1.id") . "\">";
		echo "<h4>" . mysql_result($result, 0, "headline") . "</h4>";
		$img_src=mysql_result($result, 0, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 0, "short_story") . "</p>";
		echo "</a></td>";
	}
?>			
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 3) {
		echo "<td class=\"top_news_box_2\" width=\"50%\">";
		echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, 2, "Story1.id") . "\">";
		echo "<h4>" . mysql_result($result, 2, "headline") . "</h4>";
		$img_src=mysql_result($result, 2, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 2, "short_story") . "</p>";
		echo "</a></td>";
	}
?>			
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 5) {
		echo "<td class=\"top_news_box_1\" width=\"50%\">";
		echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, 4, "Story1.id") . "\">";
		echo "<h4>" . mysql_result($result, 4, "headline") . "</h4>";
		$img_src=mysql_result($result, 4, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 4, "short_story") . "</p>";
		echo "</a></td>";
	}
?>			
	</tr>
</table>
</td><td width="35%" valign="top">
<table>
	<tr>
<?php
	if (mysql_numrows($result) >= 2) {
		echo "<td class=\"top_news_box_2\" width=\"50%\">";
		echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, 1, "Story1.id") . "\">";
		echo "<h4>" . mysql_result($result, 1, "headline") . "</h4>";
		$img_src=mysql_result($result, 1, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 1, "short_story") . "</p>";
		echo "</a></td>";
	}
?>
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 5) {
		echo "<td class=\"top_news_box_1\" width=\"50%\">";
		echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, 3, "Story1.id") . "\">";
		echo "<h4>" . mysql_result($result, 3, "headline") . "</h4>";
		$img_src=mysql_result($result, 3, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 3, "short_story") . "</p>";
		echo "</a></td>";
	}
?>
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 8) {
		echo "<td class=\"top_news_box_2\" width=\"50%\">";
		echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, 5, "Story1.id") . "\">";
		echo "<h4>" . mysql_result($result, 5, "headline") . "</h4>";
		$img_src=mysql_result($result, 5, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 5, "short_story") . "</p>";
		echo "</a></td>";
	}
?>
	</tr>
</table></td><td width="30%" valign="top">
<table class="sidebar_table"><tr><td class="sidebar_table_header" align="center">Other Top Stories</td></tr>
<?php
		$num=mysql_numrows($result);
		$i=6;
		$j=0;
		while (($i < $num) && ($j < 5)) {
			if ($j != 0) {
				echo "<tr><td class=\"div_white_background\"></td></tr>";
			}
			echo "<tr><td class=\"sidebar_table_body_box\">";
			echo "<a href=\"http://test-domain.comuf.com/story/index.php?story_id=" . mysql_result($result, $i, "Story1.id") . "\">";
			if (mysql_result($result, $i, "Events.name") != "Invalid") {
				echo "<h4>" . mysql_result($result, $i, "Events.name") . "</h4>";
			} else {
				echo "<h4>" . mysql_result($result, $i, "Sports.name") . "</h4>";
			}
			echo "<p>" . mysql_result($result, $i, "headline") . "</p>";
			echo "</a></td></tr>";
			$j++;
			$i++;
		} 
?>
</table>
</table>
</div>
<div class="inside_content" id="inside_content_blogs">
<?php 
	$query = 'SELECT `Blog`.`id`, `Blog`.`photo_src`, `Blog`.`title`, `Blog`.`short_story`,`Blog`.`blog_link`,`Sports`.`name`, `Events`.`name` FROM `Blog`,`Sports`,`Events` WHERE `Sports`.`id`=`Blog`.`sport_id` AND `Events`.`id` = `Blog`.`event_id`';
	if ("$sport_id" != "") {
		$query = $query . ' AND `sport_id`=' . $sport_id . ' ';
	}
	else if ("$event_id" != "") {
		$query = $query . ' AND `event_id`=' . $event_id . ' ';
	}
	$query = $query . ' ORDER BY `time` DESC';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>

<table>
<tr><td width="35%" valign="top">
<table>
	<tr>
<?php
	if (mysql_numrows($result) > 0) {
		echo "<td class=\"top_news_box_1\" width=\"50%\">";
		echo "<a href=\"" . mysql_result($result, 0, "blog_link") . "\">";
		echo "<h4>" . mysql_result($result, 0, "title") . "</h4>";
		$img_src=mysql_result($result, 0, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 0, "short_story") . "</p>";
		echo "</a></td>";
	}
?>			
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 3) {
		echo "<td class=\"top_news_box_2\" width=\"50%\">";
		echo "<a href=\"" . mysql_result($result, 2, "blog_link") . "\">";
		echo "<h4>" . mysql_result($result, 2, "title") . "</h4>";
		$img_src=mysql_result($result, 2, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 2, "short_story") . "</p>";
		echo "</a></td>";
	}
?>			
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 5) {
		echo "<td class=\"top_news_box_1\" width=\"50%\">";
		echo "<a href=\"" . mysql_result($result, 4, "blog_link") . "\">";
		echo "<h4>" . mysql_result($result, 4, "title") . "</h4>";
		$img_src=mysql_result($result, 4, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 4, "short_story") . "</p>";
		echo "</a></td>";
	}
?>			
	</tr>
</table>
</td><td width="35%" valign="top">
<table>
	<tr>
<?php
	if (mysql_numrows($result) >= 1) {
		echo "<td class=\"top_news_box_2\" width=\"50%\">";
		echo "<a href=\"" . mysql_result($result, 1, "blog_link") . "\">";
		echo "<h4>" . mysql_result($result, 1, "title") . "</h4>";
		$img_src=mysql_result($result, 1, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 1, "short_story") . "</p>";
		echo "</a></td>";
	}
?>
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 4) {
		echo "<td class=\"top_news_box_1\" width=\"50%\">";
		echo "<a href=\"" . mysql_result($result, 3, "blog_link") . "\">";
		echo "<h4>" . mysql_result($result, 3, "title") . "</h4>";
		$img_src=mysql_result($result, 3, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 3, "short_story") . "</p>";
		echo "</a></td>";
	}
?>
	</tr>
	<tr>
<?php
	if (mysql_numrows($result) >= 6) {
		echo "<td class=\"top_news_box_2\" width=\"50%\">";
		echo "<a href=\"" . mysql_result($result, 5, "blog_link") . "\">";
		echo "<h4>" . mysql_result($result, 5, "title") . "</h4>";
		$img_src=mysql_result($result, 5, "photo_src");
		if("$img_src" != "") {
			echo "<img src= \"$img_src\" height=\"100px\" align=\"right\"></img>";
		}
		echo "<p>" . mysql_result($result, 5, "short_story") . "</p>";
		echo "</a></td>";
	}
?>
	</tr>
</table></td><td width="30%" valign="top">
<table class="sidebar_table"><tr><td class="sidebar_table_header" align="center">Other Top Blogs</td></tr>
<?php
		$num=mysql_numrows($result);
		$i=6;
		$j=0;
		while (($i < $num) && ($j < 5)) {
			if ($j != 0) {
				echo "<tr><td class=\"div_white_background\"></td></tr>";
			}
			echo "<tr><td class=\"sidebar_table_body_box\">";
			echo "<a href=\"" . mysql_result($result, $i, "blog_link") . "\">";
			if (mysql_result($result, $i, "Events.name") != "Invalid") {
				echo "<h4>" . mysql_result($result, $i, "Events.name") . "</h4>";
			} else {
				echo "<h4>" . mysql_result($result, $i, "Sports.name") . "</h4>";
			}
			echo "<p>" . mysql_result($result, $i, "title") . "</p>";
			echo "</a></td></tr>";
			$j++;
			$i++;
		} 
?>
</table>
</table>
<?php
    mysql_close($link);
?>
</div>										