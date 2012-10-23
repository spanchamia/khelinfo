<?php
	echo "<link rel=\"stylesheet\" href=\"" . $top_level_dir . "/css/style.php\" media=\"screen\" />";
?>

<div id="content_nav_row">
<?php 
    $link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
	    or die('Could not connect ' . $mysql_host . ' ' . $mysql_user . ' : ' . mysql_error());
	mysql_select_db($mysql_database) 
		or die('Could not select database');

	$query = 'SELECT `name`,`id` FROM `Sports` ORDER BY `name` ASC';
	$result_sports = mysql_query($query) or die('Query failed: ' . mysql_error());
	$query = 'SELECT `name`,`id` FROM `Events` ORDER BY `name` ASC';
	$result_events = mysql_query($query) or die('Query failed: ' . mysql_error());
?>
<table class="nav_table">
    <tr>
    	<td><a class="nav_row_link" href="http://test-domain.comuf.com/">Home</a></td>
    	<td>|</td>
        <td>
            <div class="nav_table_dd">
                <a href="#" class="nav_row_link">Sports</a>
                <ul>
<?php
	$num = mysql_numrows($result_sports);
	$i = 0;
	while ($i < $num) {
		$sport_name = mysql_result($result_sports, $i, "name");
		$this_sport_id = mysql_result($result_sports, $i, "id");
		if ($sport_name == "Invalid") {
			$i++;
			continue;
		}
		echo "<li><a href=\"http://test-domain.comuf.com/index.php?sport_id=" . $this_sport_id . "\">" . $sport_name . "</a></li>";
		$i++;
	}
?>
                </ul>
        </div>
    	</td>
	<td>|</td>
        <td>
            <div class="nav_table_dd">
                <a href="#" class="nav_row_link">Events</a>
                <ul>
<?php
	$num = mysql_numrows($result_events);
	$i = 0;
	while ($i < $num) {
		$event_name = mysql_result($result_events, $i, "name");
		$this_event_id = mysql_result($result_events, $i, "id");
		if ($event_name == "Invalid") {
			$i++;
			continue;
		}
		echo "<li><a href=\"http://test-domain.comuf.com/index.php?event_id=" . $this_event_id . "\">" . html_format($event_name) . "</a></li>";
		$i++;
	}
?>
                </ul>
        </div>
    	</td>
    	<td>|</td>
    	<td>
    		<a class="nav_row_link" href="http://test-domain.comuf.com/index.php?blog_id=0">Blogs</a>
    	</td>
   	<td>|</td>
    	<td>
    		<a class="nav_row_link" href="http://test-domain.comuf.com/index.php?video_id=0">Videos</a>
    	</td>
    	<td width="100%" align="right">
    		<input type="text" name="search_query" value="Search" onclick="this.value='';this.onclick='';" /> 
    	</td>
    	<td>
    		<input type="button" name="search_button" value="Go" />
    	</td>
    	</tr>
</table>
<?php
	mysql_close($link);
?>
</div>				