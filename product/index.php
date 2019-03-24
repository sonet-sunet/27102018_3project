<?php

    $pageConfig = [
        'title'=> 'Мужчинам',
        'cssFiles' => [
            '/css/product.css'
        ],
        'jsFiles'=> [
            '/js/script.js',
            '/js/product.js'
        ]
    ];

    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    $template = [
        'product'=>[],
        'sizes'=>[]
    ];

    if( isset($_GET['id']) ){
        $product_id = $_GET['id'];

        $sql = "SELECT * FROM products WHERE id={$product_id}";

        $result = mysqli_query($db, $sql);

        $template['product']= mysqli_fetch_assoc($result);
        
        $sql_sizes = "SELECT * FROM product_sizes WHERE product_id = {$product_id}";
        $result_sizes = mysqli_query($db, $sql_sizes);

        while( $row = mysqli_fetch_assoc($result_sizes) ){
            $template['sizes'][] = $row;     
        }
    }
?>


<div class="directs">
    <a href="#" class="directs__dir">Главная/</a>
    <a href="#" class="directs__dir">Мужчинам/</a>
    <a href="#" class="directs__dir">Обувь/</a>
    <a href="#" class="directs__dir"><?=$template['product']['name']?></a>
</div>



<div class="product">
    <div class="product__block_color">
        <div class="product_image" style="background-image:url('<?=$template['product']['photo']?>')"></div>
    </div>
    <h1></h1>
    <p class="article">Артикул <?=$template['product']['sku']?></p>
    <p class="price"><?=$template['product']['price']?> руб.</p>
    <p  class="desk"><?=$template['product']['description']?></p>
    <p class="desk">Размер</p>
    <div class ="sizes">
        <?php foreach($template['sizes'] as $size): ?>
            <div class="sizes__item"><?=$size['size']?></div>
        <?php endforeach; ?>
    </div>
</div>    

<div class='add-to-basket' data-product-id = '<?=$template['product']['id']?>'>Добавить в корзину</div>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?> 