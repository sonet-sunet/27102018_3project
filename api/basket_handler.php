<?php
  session_start();

  // unset($_SESSION['basket']);

  // if( isset( $_SESSION['count'] ) ){
  //   $_SESSION['count']++;
  // }else{
  //   $_SESSION['count']=1;
  // }
  
  // print_r( $_SESSION );

  $response = [
    'count' => 0
  ];
  
  // Добавление товара в корзину,если есть productId
  if( isset($_GET['productId']) ){
    if( !isset($_SESSION['basket']) ){
      $_SESSION['basket'] =[];
      $_SESSION['basket'][] = [
        'id'=>$_GET['productId'],
        'count'=> 1
      ];
    }else{
      $if_exist = false;
      foreach($_SESSION['basket'] as $basketKey => $basketItem){
        if($basketItem['id'] == $_GET['productId'] ){
          $_SESSION['basket'][$basketKey]['count']++;
          $if_exist = true;
        }
      }
      if( $if_exist == false){
        $_SESSION['basket'][] = [
          'id'=>$_GET['productId'],
          'count'=> 1
        ];
      }
    }
  }
  // print_r($_SESSION);
  //  Подсчет кол-ва товаров в корзине
  $count = 0;
  foreach( $_SESSION['basket'] as $basketItem){
    $count += $basketItem['count'];
  }
  $response['count'] = $count;


  echo json_encode($response);



















?>