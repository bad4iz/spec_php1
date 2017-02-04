<?
function drawMenu($menu, $vertical = true)
{
    echo "<ul>";
    foreach ($menu as $value) {
        echo "<li";
        if (!$vertical) {
            echo 'style="display: inline-block;"';
        }
        echo "><a href='{$value['href']}'>{$value['link']}</a></li>";
    }
    echo "</ul>";
}
