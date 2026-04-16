<?php 
    include('database/product_db.php');
    header('Content-Type: application/json; charset=utf-8');

    $products = get_products();

    echo json_encode([
        'code' => 0,
        'message' => 'Read product successful',
        'data' => $products
    ]);
?>