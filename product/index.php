<?php
    $pageConfig = [
        'title'=> 'Товар',
        'cssFiles' => [
            '/css/style.css',
            '/css/catalog.css'
        ],
        'jsFiles'=>[
            '/js/script.js',
            '/js/product.js'
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    $template = [
        'product'=>[],
        'product_sizes'=>[]
    ];

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id={$product_id}";
        $result = mysqli_query($db, $sql);

        $template['product']=mysqli_fetch_assoc($result);


     
        $sql_sizes = "SELECT * FROM product_sizes WHERE product_id={$product_id}";
        $result_sizes = mysqli_query($db, $sql_sizes);

        while ($row = mysqli_fetch_assoc($result_sizes) ){
            $template['product_sizes'][] = $row;
        }


    }
    // echo "<pre>";
    // print_r( $template['product_sizes']);
    // echo "</pre>";
?>
<div class="breadcrumbs">
    <a href="/">ГЛАВНАЯ</a>
</div>
<div class="details-block">
    <div class="details-block-image" style='background-image:url(<?php echo $template['product']['photo']?>)'></div>
    <h2><?php echo $template['product']['name']?></h2>
    <div>Артикул: <?php echo $template['product']['sku']?></div>
    <div><i><b><?php echo $template['product']['price']?> руб.</b></i></div>
    <div><?php echo $template['product']['description']?></div>
    <div>РАЗМЕР</div>
    <div class="details-block-size">
		<?php foreach($template['product_sizes'] as $size):?>
		<a href="#" class="details-block-size-item"><?=$size['size']?></a>
		<?php endforeach; ?>
    </div>
    <a href="http://" class="button-add add-to-bascet" data-product-id="<?=$template['product']['id']?>">ДОБАВИТЬ В КОРЗИНУ</a>
</div>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>