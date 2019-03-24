<?php
    session_start();

    $responce = [
        'count'=>0
    ];

    //  unset($_SESSION['count']);

    if (isset ($_GET['productId'])){
        if(!isset( $_SESSION['bascet'] ) ){
            $_SESSION['bascet'] =[];
            $_SESSION['bascet'][] = [
                'id'=> $_GET['productId'],
                'count' => 1
            ];
        } else {
            $if_exist = false;
            foreach( $_SESSION['bascet'] as $basketKey => $basketItem ) {
                if ($basketItem['id'] == $_GET['productId'] ) {
                    $_SESSION['bascet'][$basketKey]['count']++;
                    $if_exist = true;
                }
            }
            if ( $if_exist == false) {
                $_SESSION['bascet'][] = [
                    'id'=> $_GET['productId'],
                    'count' => 1
                ]; 
            }
        }
    }


    //Пересчет товара в корзине
    $count= 0;
    foreach( $_SESSION['bascet'] as $basketItem ) {
        $count += $basketItem['count'];
    }

    $responce['count'] = $count;

    echo json_encode( $responce);

    // if(isset( $_SESSION['count'] )){
    //     $_SESSION['count']++;
    // } else {
    //     $_SESSION['count']=1;
    // }
    
    // print_r( $_SESSION );
?>

