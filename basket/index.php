<?php
    $pageConfig = [
        'title'=> 'Корзина',
        'cssFiles'=>[
            '/css/catalog.css'
        ],
        'jsFiles'=>[
            '/js/script.js'
        ]
    ];
    
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    session_start();

    $template = [
        'products'=>[]
    ];

    foreach( $_SESSION['basket'] as $basketItem ){
        $sql = "SELECT * FROM products WHERE id = {$basketItem['id']}";
        $result = mysqli_query($db, $sql);
        $product = mysqli_fetch_assoc($result);

        //Тут какой-то алгоритм добавление в $product кол-во и подсчет итоговой цены за этот товар


        $template['products'][] = $product;
    }


?>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 
