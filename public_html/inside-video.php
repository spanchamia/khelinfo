<link rel="stylesheet" href="css/inside-index-style.php" media="screen">
<div class="inside_video">
<?php 

    $link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
	    or die('Could not connect ' . $mysql_host . ' ' . $mysql_user . ' : ' . mysql_error());
	mysql_select_db($mysql_database) 
		or die('Could not select database');

	$home = 'Home';

	$query = 'SELECT `Videos`.`id`, `Videos`.`headline`, `Videos`.`link`, `Events`.`name`,`Sports`.`name` FROM `Videos`,`Events`,`Sports` WHERE `Videos`.`event_id`=`Events`.`id` AND `Videos`.`sport_id` = `Sports`.`id`';
	$query = $query . ' ORDER BY `id` DESC';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>
<table>
<tr><td width="70%" valign="top">
<table>
	<tr>
<?php
	$i=0;
	$num=mysql_numrows($result);
	while ($i < $num) {
		if ("$video_id" == mysql_result($result, $i, "id")) {
			echo "<iframe width=\"420\" height=\"315\" src=\"" . mysql_result($result, $i, "link") . "\" frameborder=\"0\" allowfullscreen></iframe>";
			break;
		}
		$i++;
	}
?>
	</tr>
</table>
</td>
<td width="30%" valign="top">
<table class="sidebar_table"><tr><td class="sidebar_table_header" align="center">Other Related Videos</td></tr>
<?php
		
		$i=0;
		while (($i < $num) && ($i < 5)) {
			if ($i != 0) {
				echo "<tr><td class=\"div_white_background\"></td></tr>";
			}
			echo "<tr><td class=\"sidebar_table_body_box\">";
			echo "<a href=\"http://test-domain.comuf.com/index.php?video_id=" . mysql_result($result, $i, "id") . "\">";
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
<?php
    mysql_close($link);
?>
</div>	