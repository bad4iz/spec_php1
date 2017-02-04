<?
require_once "lib.inc.php"
require_once "data.inc.php"
?>


<!DOCTYPE html>
<html>

<head>
    <title>Сайт нашей школы</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>

<div id="header">
    <!-- Верхняя часть страницы -->

    <!-- Верхняя часть страницы -->
</div>

<div id="content">
    <!-- Заголовок -->
    <h1><?= $welkome ?>, Гость!</h1>
    <!-- Заголовок -->

    <blockquote>
        <?
        echo "Сегодня $day число, $mon месяц, $year год.";
        ?>
    </blockquote>
    <!-- Область основного контента -->

    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->

    <!-- Навигация -->
</div>
<div id="footer">
    <?
    drawMenu($leftMenu, false)
    ?>
    <!-- Нижняя часть страницы -->

    <!-- Нижняя часть страницы -->
</div>
</body>

</html>
