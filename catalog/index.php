<?php
    $pageConfig = [
        'title'=> 'Каталог',
        'cssFiles' => [
            '/css/catalog.css'
        ],
        'jsFiles'=> [
            '/js/script.js',
            '/js/catalog.js'
        ]
    ];


    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>


<div class="directs">
    <a href="#" class="directs__dir">Главная/</a>
    <a href="#" class="directs__dir">Мужчинам/</a>

</div>    
        <main>
            <h1 class="main-header">Мужчинам</h1>
            <p class="main_about">Все товары</p>
            <!-- <div class="list">
                <form action="">
                <optgroup label = "Категории">
                <option value="Категории">Категории</option>
                </optgroup>
                </form>
            </div> -->
            <div class="catalog">
            </div>
            <div class="pagination"></div>
        </main>
    </div>
    <!-- <script src="/js/catalog.js"></script> -->
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
