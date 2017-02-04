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
function drawTable($cols = 10, $rows = 10, $color = "red")
{
    $cols++;
    $rows++;
    for ($i = 1; $i < $cols; $i++) {
        echo "<tr>";
        for ($j = 1; $j < $rows; $j++) {
            if ($j == 1)  {
                echo "<th style='background-color:$color';>" . ($i * $j) . "</th>";
            } elseif ($i == 1) {
                echo "<th style='background-color:$color';>" . ($i * $j) . "</th>";
            } else{

            echo "<td>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    }
}
