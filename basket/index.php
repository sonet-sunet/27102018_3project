<?php
    $pageConfig = [
        'title' => 'Корзина',
        'cssFiles' => [
            '/css/dist/main.css'
        ],
        'jsFiles' => [
            '/js/script.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    session_start();

    $template = [
        'products' => [],
        'count' => []
    ];

    foreach($_SESSION['basket'] as $basketItem){
        $sql = "SELECT * FROM products WHERE id = {$basketItem['id']}";
        $result = mysqli_query($db, $sql);
        $product = mysqli_fetch_assoc($result);

        $template['products'][] = $product;
        print_r($template['products']);
    }
?>
<main>

</main>
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>