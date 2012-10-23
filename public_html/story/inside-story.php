<link rel="stylesheet" href="css/inside-story-style.php" media="screen" />

<div id="inside_story">
<?php 
    $link = mysql_connect($mysql_host, $mysql_user, $mysql_password)
	    or die('Could not connect ' . $mysql_host . ' ' . $mysql_user . ' : ' . mysql_error());
	mysql_select_db($mysql_database) 
		or die('Could not select database');

	$query = 'SELECT `source`, `text`, `photo_src`, `headline` FROM `Story1` WHERE `id`=' . $story_id . ';';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>
<table>
<tr><td><div class="story_headlines">
<?php
    if (mysql_numrows($result) == 0) {
        die('Invalid Story Id');
    }
    echo "<h4>" . html_format(mysql_result($result, 0, "headline")) . "</h4>";
?>
</div>
</td></tr>
<tr><td><div class="story_source">
<?php
    echo "<p>Source: " . html_format(mysql_result($result, 0, "source")) . "</p>";
?>
</div>
</td></tr>
<?php
    $img_src = mysql_result($result, 0, "photo_src");
    $big_img = false;
    if ($img_src != "") {
        list ($width, $height, $type, $attr) = getimagesize($img_src);
        if ($width > 400) {
            $big_img = true;
            echo "<tr><td width=\"100%\">";
            echo "<img class=\"story_img\" align=\"middle\" class=\"story_photo\" src=\"" . mysql_result($result, 0, "photo_src") . "\" /><br/>";
            echo "</td></tr>";
        }
    }
?>
<tr><td>
<?php
    if (($img_src != "") && ($big_img == false)) {
        echo "<img class=\"story_img\" align=\"left\" class=\"story_photo\" src=\"" . mysql_result($result, 0, "photo_src") . "\"></img>";
    }
?>
<div class="story_text">
<?php
    $story_text = mysql_result($result, 0, "text");
    echo "<p>" . html_format($story_text) . "</p>";
?>
</tr></td>
</div>
</td></tr>
</table>
</div>