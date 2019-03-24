<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');

    $result_data = [];

    sleep(3);

    $sql = "SELECT * FROM products WHERE active = 1";
    $result = mysqli_query($db, $sql);

    while( $row = mysqli_fetch_assoc($result) ){
        
        $result_data[] = $row;
    }

    echo json_encode($result_data);
?>