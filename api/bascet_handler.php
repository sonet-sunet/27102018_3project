<?php
  session_start();

  $response = [
    'count' => 0
  ];
  // unset($_SESSION['bascet']);
  if (  isset( $_GET['productId'])){
    if(!isset($_SESSION['bascet'])){
      $_SESSION['bascet'] = [];
      $_SESSION['bascet'][] = [
        'id'=> $_GET['productId'],
        'count'=> 1
      ];
    }else {
      $if_exist = false;
      foreach($_SESSION['bascet'] as $bascetKey => $bascetItem){//& для работы с оригиналом. доступ по ключу 
        if($bascetItem['id'] == $_GET['productId']){//если такой есть, то увеличиваем
          $_SESSION['bascet'][$bascetKey]['count']++;
          $if_exist = true;
        }
      }
      if($if_exist == false){
        $_SESSION['bascet'][] = [
          'id'=> $_GET['productId'],
          'count'=> 1
        ];
      }
    } 
  }

  // print_r($_SESSION);
  $count = 0;
  foreach($_SESSION['bascet'] as $bascetItem){
    $count += $bascetItem['count'];
  }
  $response['count'] = $count;
  echo json_encode($response);






















        // $_SESSION['bascet'] = [[
      //   'id'=>$GET['productId'],
      //   'count'=> 1
      // ]];









  // if (isset (  $_SESSION['count'])){
  //   $_SESSION['count']++;
  // }else{
  //   $_SESSION['count'] = 1;
  // }

  // print_r(  $_SESSION);

