<?
// Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");
$hour = (int)strftime('%H');
$day = strftime('%d');
$mon = iconv("windows-1251", "UTF-8", strftime('%B'));;
$year = strftime('%Y');
$welkome = '';

if ($hour < 7) {
    $welkome = 'Доброй ночи';
} elseif ($hour < 12) {
    $welkome = 'Доброе утро';
} elseif ($hour < 18) {
    $welkome = 'Добрый день1';
} elseif ($hour < 23) {
    $welkome = 'Добрый вечер';
} else {
    $welkome = 'Доброй ночи';
}

$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];

