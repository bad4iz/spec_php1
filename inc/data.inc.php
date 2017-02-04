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

$leftMenu = [['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];

