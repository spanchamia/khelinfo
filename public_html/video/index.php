<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $top_level_dir = "..";
    include("variables.php"); 
    include("functions.php"); 
?>
        <title><?php echo $title_string; ?></title>		
    </head>
    <body>
        <table id="tbl_content_wrapper">
            <tr><td>
<?php 
    include($top_level_dir . '/top-row.php');
?>
            </td></tr>
            <tr><td>
<?php
    include($top_level_dir . '/banner-row.php');
?>
            </td></tr>	
            <tr><td>
<?php
    include($top_level_dir . '/marquee-row.php');
?>
            </td></tr>
            <tr><td>
<?php
    include($top_level_dir . '/nav-row.php');
?>
            </td></tr>
            <tr><td>
<?php
    include('inside-video.php');
?>
            </td></tr>	
            <tr><td>
<?php
    include($top_level_dir . '/bottom-row.php');
?>
            </td></tr>
    </table>
    </body>
</html>