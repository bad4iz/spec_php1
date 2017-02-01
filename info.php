<?
$value =  ini_get("post_max_size");
$number = preg_replace("/[^0-9]+/", '', $value);
$text = preg_replace("/[^MGBKmkgb]+/",'', $value);
echo $text;
$text =  strtolower($text);
$size = 1;
switch ($text){
    case 'g':
        $size *= $number*1024;
        echo $size;
    case 'm':
        $size *= $number*1024;
        echo " m $size";
    case 'k':
        $size *= $number*1024;
    case 'b':
        $size *= $number;
        break;
    default:
        $size *= $number;
        echo "default";
}
echo $size;
echo $text;