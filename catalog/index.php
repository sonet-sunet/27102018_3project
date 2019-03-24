<?php
    $cssFiles = [
        '/css/catalog.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

          
        <main>
            <div class="breadcrumbs">
                <p>ГЛАВНАЯ</p>
                <P>/</P>
                <P>МУЖЧИНАМ</P>
            </div>
            <div class="main-header">
                <h1>Мужчинам</h1>
                <h3>все товары</h3>
            </div>
            <div class="multifilter">
                <div class="multifilter__item"> 
                    <div>Категория</div>
                    <div class="multifilter__pic"></div>
                </div>
                <div class="multifilter__item">
                    <div>Размер</div>
                    <div class="multifilter__pic"></div>
                </div>
                <div class="multifilter__item">
                    <div>Стоимость</div>
                    <div class="multifilter__pic"></div>
                </div>

            </div>
            <div class="catalog"></div>
            <div class="page">
                <div class="page__number">1</div>
                <div class="page__number">2</div>
                <div class="page__number">3</div>
                <div class="page__number">4</div>
            </div>
        </main>
        



<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
