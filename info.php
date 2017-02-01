<?
$value =  ini_get("post_max_size");
$text = preg_replace("/[^MBGmgb]+/", '', $value);
$number = preg_replace("/[^0-9]+/", '', $value);
echo $text; 
echo $number; 
