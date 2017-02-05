<?
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";




$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id){ case 'about': $title = 'О сайте'; $header = 'О нашем сайте'; break; case 'contact': $title = 'Контакты'; $header = 'Обратная связь'; break; case 'table': $title = 'Таблица умножения'; $header = 'Таблица умножения'; break; case 'calc': $title = 'Он-лайн калькулятор'; $header = 'Калькулятор'; break; }
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
<? require_once "inc/top.inc.php"; ?>

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
<? require_once "inc/index.inc.php" ?>
    <!-- Область основного контента -->
</div>
<div id="nav">
    <!-- Навигация -->
<? require_once "inc/menu.inc.php"; ?>
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
