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
      'products' =>[]
    ];

    foreach($_SESSION['bascet'] as $bascetItem){
    $sql = "SELECT * FROM products WHERE id = {$bascetItem['id']}";
    $result = mysqli_query($db, $sql);
    $product = mysqli_fetch_assoc($result);
    //comments
    $template['products'][] = $products;
    }
?>
    <main>
        <h1 class="main-header">КОРЗИНА</h1>
        
    
    </main>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>