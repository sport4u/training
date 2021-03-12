<!doctype html>
<?php
    $lang = $_GET['lang'];
    $translate = [
        'ru' => [
            'title' => 'Произошла ошибка!',
            'btn' => 'Вернуться назад'
        ],
        'ua' =>[
            'title' => 'Виникла помилка!',
            'btn' => 'Повернутися назад'
        ]
    ]
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/thank-you-page.css">
    <title>Error!</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2><?=$translate[$lang]['title']?></h2>
                <h4><?php if(!empty($_GET['message'])) { echo htmlspecialchars($_GET["message"]); } ?></h4>
                <a href="/" class="btn btn-outline-primary mt-5"><?=$translate[$lang]['btn']?></a>
            </div>
        </div>
    </div>
</body>
</html>

