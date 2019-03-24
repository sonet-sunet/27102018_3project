<?php
    $pageConfig = [
        'title' => 'Каталог',
        'cssFiles' => [
            '/css/dist/catalog.css'
        ],
        'jsFiles' => [
            '/js/script.js',
            '/js/catalog.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

?>

<main class="wrapper">
    <div class="break-line"></div>
    <h5 class="breadcrumbs">Главная  / Мужчинам</h5>
    <div class="catalog-title">
        <h1 class="catalog-title__section-name">Мужчинам</h1>
        <span class="catalog-title__filter-name">Все товары</span>
    </div>
    <div class="filter">
        <div>Категория</div>
        <div>Размер</div>
        <div>Стоимость</div>
    </div>
    <div class="catalog">
        
    </div>
    <div class="page-buttons">
        <!-- <div class="page-buttons__item page-buttons__item_color_white">1</div>
        <div class="page-buttons__item">2</div>
        <div class="page-buttons__item">3</div>
        <div class="page-buttons__item">4</div> -->
    </div>
</main>








<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');

?>