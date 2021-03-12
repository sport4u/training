<!doctype html>
<?php
$lang = $_GET['lang'];

//Перевод полей в зависимости от языка
$translate = [
    'ru' => [
        'title'        => 'Спасибо!',
        'title_h2'     => 'Спасибо. Ваш заказ принят!',
        'data'         => 'Вы ввели следующие данные:',
        'name'         => 'Имя',
        'phone'        => 'Телефон',
        'info'         => 'Мы позвоним Вам в ближайшие 15 минут. Держите телефон рядом.',
        'cc_work_time' => 'Наш колл центр работает с 09:00 до 22:00'

    ],
    'ua' => [
        'title'        => 'Дякуемо!',
        'title_h2'     => 'Дякуемо. Ваше замовлення прийнято!',
        'data'         => 'Ви ввели такі дані:',
        'name'         => 'Ім\'я',
        'phone'        => 'Телефон',
        'info'         => 'Ми зателефонуємо Вам в найближчі 15 хвилин. Тримайте телефон поруч. ',
        'cc_work_time' => 'Наш колл центр працює з 09:00 до 22:00'
    ]
];

if (!empty($_GET['name'])) {
    $name = htmlspecialchars($_GET["name"]) ?? $name = '-';
}
if (!empty($_GET['phone'])) {
    $phone = htmlspecialchars($_GET["phone"]) ?? $phone = '-';
}
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/thank-you-page.css">
    <title><?= $translate[$lang]['title'] ?></title>

    <!--Начало Метрики-->



    <!--Конец Метрики-->
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2><?= $translate[$lang]['title_h2'] ?></h2>
            <h4>
                <?= $translate[$lang]['data'] ?><br/>
            </h4>
            <h4>
                <?= $translate[$lang]['name'] ?>: <?= $name ?><br/>
                <?= $translate[$lang]['phone'] ?>: <?= $phone ?>
            </h4>

            <h4><?= $translate[$lang]['info'] ?><br>
                <?= $translate[$lang]['cc_work_time'] ?></h4>
        </div>
    </div>
</div>
</body>
</html>

