<?php
    $pageConfig = [
        'title'=> 'Главная',
        'cssFiles' => [
            '/css/style.css',
            '/css/catalog.css'
        ],
        'jsFiles'=>[
            '/js/script.js',
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
<main>
    <h1 class="main-header">НОВЫЕ ПОСТУПЛЕНИЯ ВЕСНЫ</h1>
    <p>Мы подготовили для Вас лучшие новинки сезона</p>
    <a href="http://" class="button-new">ПОСМОТРЕТЬ НОВИНКИ</a>
    <div class="main-block">
        <div class="main-block__item">
            <div class="main-block__item_part block-v2" id="photo-one">ДЖИНСОВЫЕ КУРТКИ NEW ARRIVAL</div>
            <div class="main-block__item_part" id="photo-five"></div>
        </div>
        <div class="main-block__item">
            <div class="main-block__item_part block-grey-light">3</div>
            <div class="main-block__item_part" id="photo-two"></div>
            <div class="main-block__item_part block-grey-dark">5</div>
        </div>
        <div class="main-block__item">
            <div class="main-block__item_part" id="photo-three"></div>
            <div class="main-block__item_part block-grey-light">7</div>
            <div class="main-block__item_part" id="photo-six"></div>
        </div>
        <div class="main-block__item">
            <div class="main-block__item_part block-grey-dark">9</div>
            <div class="main-block__item_part block-v2" id="photo-four"></div>
        </div>
    </div>
    <div class="subscribe">
        <h2 class="main-header">БУДЬ ВСЕГДА В КУРСЕ ВЫГОДНЫХ ПРЕДЛОЖЕНИЙ</h2>
        <p>подписывайся и следи за новинками и выгодными предложениями.</p>
        <form action="" method="post">
        <input type="mail" name="mail" placeholder="e-mail">
        <button type="submit" class="button-new">записаться</button>
    </form>
    </div>
    
</main>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>