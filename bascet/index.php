<?php
    $pageConfig = [
        'title'=> 'Корзина',
        'cssFiles' => [
            '/css/style.css',
            '/css/catalog.css'
        ],
        'jsFiles'=>[
            '/js/script.js',
        ]
    ];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    session_start();
    $template = [
      'product' =>[]
    ];

    foreach($_SESSION['bascet'] as $bascetItem){
    $sql = "SELECT * FROM products WHERE id = {$bascetItem['id']}";
    $result = mysqli_query($db, $sql);
    $product = mysqli_fetch_assoc($result);
    //comments
    $template['product'][] = $product;
    }
    // print_r($_SESSION);

?>
     <main class="main">
            <h1 class="main-header">ВАША КОРЗИНА</h1>
            <h3>Товары резервируются на ограниченное время</h3>
                <?php foreach($template['product'] as $productItem):?>
                <div style='background-image:url(<?=$productItem['photo']?>)'></div>
                <div><?=$productItem['name']?></div>
                <div><?=$productItem['price']?></div>
                <div><?=$productItem['description']?></div>
                <?php endforeach; ?>
        </main>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>