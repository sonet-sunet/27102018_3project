<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php foreach( $cssFiles as $file ): ?>
        <link rel="stylesheet" href="<?=$file?>">
    <?php endforeach;?>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,700" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
            <header class="header">
                <div class="logo"></div>
                <nav class="navigation">
                    <a class="navigation__item" href="#">Женщинам</a>
                    <a class="navigation__item" href="#">Мужчинам</a>
                    <a class="navigation__item" href="#">Детям</a>
                    <a class="navigation__item" href="#">Новинки</a>
                    <a class="navigation__item" href="#">О нас</a>
                </nav>
                <div class="user-info">
                    <div class="user-info__pic"></div>
                    <div class="user-info__text">
                        Привет, Алексей
                        (<span class="text_active">выйти</span>)
                    </div>
                </div>
                <div class="basket">
                    <div class="basket__pic"></div>
                    <div class="basket__text">Корзина(5)</div>
                </div>
            </header>
<!-- BEM - block element modoficator -->