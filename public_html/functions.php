<?php
function html_format($str) {
    $str_ret = str_replace("\n", "<br/>", $str);
    $str_ret = str_replace("\'", "&apos;", $str_ret);
    $str_ret = str_replace("#", "&num;", $str_ret);
    $str_ret = str_replace("$", "&dollar;", $str_ret);
    $str_ret = str_replace("%", "&percent;", $str_ret);
    $str_ret = str_replace("&", "&amp;", $str_ret);
    $str_ret = str_replace("(", "&lpar;", $str_ret);
    $str_ret = str_replace(")", "&rpar;", $str_ret);

    return $str_ret;
}
?>