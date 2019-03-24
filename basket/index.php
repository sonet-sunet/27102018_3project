<<<<<<< HEAD
<?php
    $pageConfig = [
        'title' => 'Каталог',
        'cssFiles' => [
            '/css/dist/basket.css'
        ],
        'jsFiles' => [
            '/js/script.js',
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
    
    session_start();


    $template = [
        'products'=>[]
    ];

    foreach( $_SESSION['basket'] as $basketItem){
        $sql = "SELECT * FROM products WHERE id = {$basketItem['id']}";
        $result = mysqli_query($db, $sql);
        $product = mysqli_fetch_assoc($result);

        $product['count'] = $basketItem['count'];

        if( $product['sale'] != 0){
            $basketItemPrice = $product['count'] * ($product['price'] - $product['price'] * $product['sale']);
        }else{
            $basketItemPrice = $product['count'] * $product['price'];
        }
        $product['basketItemPrice'] = $basketItemPrice;

        $template['products'][] = $product;
    }
    // echo "<pre>";
    // print_r($template['products']);
    // echo "</pre>";
?>
<main class="wrapper">
    <div class="break-line"></div>
    <div class="catalog-title">
        <h1 class="catalog-title__section-name">Ваша корзина</h1>
        <span class="catalog-title__filter-name">Товары резервируются на ограниченное время</span>
    </div>
    <div class="basket-block">
        <div class="basket-item_row">
            <div class="basket-item_row_name">Фото</div>
            <div class="basket-item_row_name">Наименование </div>
            <div class="basket-item_row_name">Размер</div>
            <div class="basket-item_row_name">Количество</div>
            <div class="basket-item_row_name">Стоимость</div>
            <div class="basket-item_row_name">Удалить</div>
        </div>
        <?php foreach( $template['products'] as $product  ): ?>
            <div class="basket-item_row">
                <div>hdfghshsh</div>
                <div><?=$product['name']?></div>
                <div>sdhsdhds</div>
                <div><?=$product['count']?></div>
                <div><?=$product['basketItemPrice']?></div>
                <div>sdhgsdfh</div>
            </div>
        <?php endforeach;?>
        <div class="break-line"></div>
    
    
    </div>
    
</main>




=======

<?php

$pageConfig = [
    'title'=> 'Корзина',
    'cssFiles' => [
        '/css/basket.css'
    ],
    'jsFiles'=> [
        '/js/script.js'
    ]
];

$cssFiles = [
    '/css/product.css'
];
include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

session_start();

    $template=[
        'products' =>[]
    ];

        foreach ($_SESSION['basket'] as $bascetItem) {
        $sql = "SELECT * FROM products WHERE id ={$bascetItem['id']}";
        
        }
?>

>>>>>>> origin/sklyarova
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>