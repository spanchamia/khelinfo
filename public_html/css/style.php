<?php header("Content-type: text/css; charset: UTF-8"); ?>
body {
	
}

#tbl_content_wrapper {	
	font-family: Verdana;
	font-size: small;
	margin-left: 100px;
	width: 1000px;
	border: 1px solid;	
}

#content_top_row {	
	font-size: x-small;
	border: 1px solid;
	height: 30px;
}

#content_banner_row {
	background-image: url('../images/banner-background.png');
	background-repeat: no-repeat;
	height: 105px;
	border: 1px solid;
}

.center {
	margin: auto;
}

#content_marquee_row {
	color: #4a4747;
	height: 25px;
	font-size: small;
	border: 1px solid;
}

#content_nav_row {
	background: #9D2E2C;
	border: 1px solid;
	height: 30px;
	border-radius: 5px;
}

.nav_row_link {
	color: #E7A555;
}

.nav_table {
	color: #E7A555;
	font-family: Verdana;
	font-size: 8pt;
}

.nav_table_dd {
    display:inline;
    position: relative;
    z-index: 0;
    margin:0;
    padding:0;
}
.nav_table_dd:hover {
    background-color: transparent;
    z-index: 50;
}
.nav_table_dd ul{ 
    margin:0;
    padding:0;
    position: absolute;
    width:120px;
    background-color: #000;
    left: -1000px;
    list-style-type:none;
    visibility: hidden;
}
.nav_table_dd:hover ul{ 
    visibility: visible;
    top: 10pt;
    left:0px;
    background-color: #000;
}
/* -------------------- What the list items will look like inside the dropdown  ---------------------- */
.nav_table_dd ul li{
    margin:0;
    padding:0;
    background-color: #E7A555;
    margin:1px;
}
.nav_table_dd ul li:hover {
    background-color: #FFF;
    margin:1px;
}
/* -------------------- What the links look like inside the dropdown  ---------------------- */
.nav_table_dd ul li a {
    display:block;
    padding:4px;
    font-family: Verdana;
    font-size:8pt;
}
.nav_table_dd ul li a:link {
    color: #000;
    text-decoration: none;
}
.nav_table_dd ul li a:visited {
    text-decoration: none;
    color: #000;
}
.nav_table_dd ul li a:hover {
    text-decoration: none;
    color: #333;
}
.nav_table_dd ul li a:active {
    text-decoration: none;
    color: #333;
}

#content_inside_content_row {
	border: 1px solid;	
}

#content_bottom_row {
	border: 1px solid;
	color: #9D2E2C;
}
		