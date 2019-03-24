<?php
    $cssFiles = [
        '/css/catalog.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
<main>
    <div class="title">
        <h1>НОВЫЕ ПОСТУПЛЕНИЯ ВЕСНЫ</h1>
        <h3>Мы подготовили для вас лучшие новинки сезона!</h3>
        <div class="title-button">
            <a href="#">ПОСМОТРЕТЬ НОВИНКИ</a>    
        </div>
    </div>
    <div class="desk">
        <div class="desk__table">
            <div class="desk__table-item frame_1 long">
                <p>ДЖИНСОВЫЕ КУРТКИ</p>
                <p class="roman">NEW ARRIVAL</p>
            </div>
            <div class="desk__table-item frame_8"></div>
        </div>
        <div class="desk__table">
            <div class="desk__table-item frame_2">
                <div class="attention">
                    <div class="stik"></div>
                    <div class="attention-pic"></div>
                    <div class="stik"></div>
                </div>
                <p class='desk__table-item-info'>Каждый сезон мы подгоавливаем для Вас исключительно лучшую модную одежду. Следите за нашими новинками</p>
            </div>
            <div class="desk__table-item frame_5">
                <p>ДЖИНСЫ</p>
                <p class="roman">от 3200 руб.</p>
            </div>
            <div class="desk__table-item frame_9">
                <div class="arrow"></div>
                <p>АКСЕССУАРЫ</p>
            </div>
        </div>
        <div class="desk__table">
            <div class="desk__table-item frame_3"></div>
            <div class="desk__table-item frame_6">
                <div class="attention">
                    <div class="stik"></div>
                    <div class="attention-pic"></div>
                    <div class="stik"></div>
                </div>
                <p class='desk__table-item-info'>Самые низкие цены в Москве.<br> Нашли дешевле? Вернем разницу.</p>
            </div>
            <div class="desk__table-item frame_10 opacity">
                <p class="index">СПОРТИВНАЯ ОДЕЖДА</p>
                <p class="roman index">от 590 руб.</p>
            </div>
        </div>
        <div class="desk__table">
            <div class="desk__table-item frame_4">
                <div class="arrow"></div>
                <p>ЭЛЕГАНТНАЯ ОБУВЬ</p>
                <p class="roman">БОТИНКИ, КРОССОВКИ</p>
            </div>
            <div class="desk__table-item frame_7 long" >
                <p>ДЕТСКАЯ ОДЕЖДА</p>
                <p class="roman">NEW ARRIVAL</p>
            </div>
        </div>
    </div>
    <div class="info-menu">
        <h2>БУДЬ ВСЕГА В КУРСЕ ВЫГОДНЫХ ПРЕДЛОЖЕНИЙ</h2>
        <h3>подписывайся и следи за новинками и выгодными предложениями</h3>
        <form method="POST" action="form.php">
            <input type="email" name="email" placeholder="e-mail">
            <button type="submit">записаться</button>
        </form> 
        <div class="error">Некорректный e-mail. Попробуйте еще раз.</div>
    </div>
</main>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
