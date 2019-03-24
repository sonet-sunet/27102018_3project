
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

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>