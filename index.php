<?php 

$pageConfig = [
    'title'=> 'Главная',
    'cssFiles' => [
        '/css/style.css'
    ],
    'jsFiles'=> [
        '/js/script.js'
    ]
];
    $cssFiles = [
        '/css/style.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>


<div class="directs">
    <a href="#" class="directs__dir">Главная/</a>
    <a href="/catalog/index.php" class="directs__dir">Мужчинам/</a>
</div>

<main>
    <section>
        <div class="ad">
            <h1>Новые поступления весны</h1>
            <p>Мы подготовили для Вас лучши новинки сезона</p>
            <a href="#" class="ad__buttton">Посмотреть новинки</a>
        </div>
    </section>
    <section>
        <div class="model">
            <div class="model__item_1">
                <div class="item_1__block_1">
                    <div class="item_1__inside inside__pic">
                        <div class="item_1__inside__text">Джинсовые<br>куртки<br>new arrival</div>
                    </div>
                    <div class="block__disposal">
                        <div class="model__disposal_1">
                            <div class="elem">
                                <div class="elem__left_line"></div>
                                <div class="elem__circle">
                                    <div class="elem__circle__vert_line">
                                    <div class="elem__circle__point"></div>
                                </div>
                                <div class="elem__right_line"></div>
                            </div>
                        </div>
                        <div class="model__disposal_1__text">каждый сезон мы подготавливаем для Вас исключительно лучшуй модную одежду. Следи за нашими новинками</div>
                        </div>
                        <div class="model__disposal_2 model__disposal_2_pic">
                            <div class="model__disposal_2__text">Джинсы<br><span>от 3200 руб.</span></div>
                        </div>
                    </div>
                    <div class="smoll_model">
                        <div class="smoll_model_1 smoll_model_1_pic"></div>
                        <div class="smoll_model_2">
                            <div class="smoll_model_2__text">Аксессуары</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="model__item_2">
                <div class="smoll_model">
                    <div class="smoll_model_1 smoll_model_1_pic_2"></div>
                    <div class="smoll_model_2">
                    <div class="smoll_model_2__text">Элегантная<br>обувь<br><span>Ботинки, кроссовки</span></div>
                    </div>
                </div>
                <div class="item_1__block_1">
                    <div class="block__disposal">
                        <div class="model__disposal_1">
                        <div class="model__disposal_1__text">самые низкие цены в Москве<br> Нашли дешевле? Вернем разницу</div>
                        </div>
                        <div class="model__disposal_2 model__disposal_2_pic_2 ">
                            <div class="opacity">
                                <div class="model__disposal_2__text">Спортивная<br>одежда<br><span>от 3200 руб.</span></div>
                            </div>
                        </div>
                    </div>
                <div class="item_1__inside inside__pic_2">
                <div class="item_1__inside__text">Детская<br>одежда<br>new arrival</div>
                </div>
            </div>
        </div>        
    </section>
    <section>
        <div class="subscript">
            <h1>Будь всегда в курсе выгодных предложений</h1>
            <p>подписывайся и следи за новинками и выгодными предложениями</p>
            <div class="form">
                <form id="subscript" method="GET">
                    <input type="text" name="Email" placeholder = "e-mail">
                    <input type="submit" vulue="записаться"> 
                </form>
                <div class="error">Некорректный e-mail. Попробуйте еще раз</div>
            </div>
        </div>
    </section>
 
</main>


<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');

?>