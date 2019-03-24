<?php
    $pageConfig = [
        'title' => 'Каталог',
        'cssFiles' => [
            '/css/dist/details.css'
        ],
        'jsFiles' => [
            '/js/script.js',
            '/js/product.js'
        ]
    ];
    $cssFiles = [
        '/css/dist/details.css'
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
    

    $template = [
        'product'=>[],
        'sizes'=>[]
    ];
?>
<?php
    if( isset($_GET['id']) ){
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = {$product_id}";
        $result = mysqli_query($db,$sql);
        $template['product'] = mysqli_fetch_assoc($result);


        $sql_size = "SELECT * FROM product_sizes WHERE product_id = {$product_id}";
        

        $result_sizes = mysqli_query($db,$sql_size);
        while( $row = mysqli_fetch_assoc($result_sizes) ){
            $template['sizes'][]= $row;
        }
        // echo "pre";
        // print_r($template['sizes']);
        // echo "pre";
    }
?>
<main class="wrapper">
    <div class="break-line"></div>
    <h5 class="breadcrumbs">Главная  / Мужчинам  / <?=$template['product']['name']?></h5>
    <div class="details">
        <?php if( !empty($template['product']['imgSrc']) ): ?>
            <div class='details__img' style='background-image:url(<?=$template['product']['imgSrc']?>)'></div>
        <?php else:?>
            <div class='details__img' style='background-image:url(/images/no-image-available.png)'></div>
        <?php endif;?>
        <h1 class="details__name"><?=$template['product']['name']?></h1>
        <span class="details__sku">Артикул: <?=$template['product']['sku']?></span>
        <?php if( $template['product']['sale']>0 ): ?>
            <h3 class="details__price" style="color:#EE1818">Скидка! Цена:<?=$template['product']['price'] - $template['product']['price']*$template['product']['sale']?> руб. </h3>
        <?php else:?>
            <h3 class="details__price"><?=$template['product']['price']?> руб.</h3>
        <?php endif;?>
        <span class="details__desc"><?=$template['product']['description']?></span>
        <p class="details-size">Размер</p>
        <div class="page-buttons">
            <div class="page-buttons__item page-buttons__item_color_white">38</div>
            <div class="page-buttons__item page-buttons__item_color_white">39</div>
            <div class="page-buttons__item page-buttons__item_color_white">40</div>
            <div class="page-buttons__item page-buttons__item_color_white">41</div>
            <div class="page-buttons__item page-buttons__item_color_white">42</div>
        </div>
        <button class="add-to-basket" data-product-id='<?= $template['product']['id'] ?>'>Добавить в корзину</button>
    </div>
    <?php foreach($template['sizes'] as $size): ?>
        <div><span> <?= $size['size'] ?>  в количестве <?=$size['quantity']?> штук</span><br></div>
    <?php endforeach; ?>
</main>


<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>