<?php
    include('database/product_db.php');
    header('Content-Type: application/json; charset=utf-8');
    
    if(!isset($_GET['id'])) {
        die(json_encode([
            'code' => 1,
            'message' => 'Missing product id',
            'data' => null
        ]));
    }

    $id = $_GET['id'];

    $product = get_product($id);

    if($product) {
        die(json_encode([
            'code' => 0,
            'message' => 'Read product successful',
            'data' => $product
        ]));
    } else {
        die(json_encode([
            'code' => 2,
            'message' => 'Product not found with id',
            'data' => null
        ])); 
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm: <?php echo $product['name']; ?></title>
    <style>
        .product-card { border: 1px solid #ccc; padding: 20px; width: 300px; }
        .price { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <a href="index.php">Quay lại danh sách</a>

    <div class="product-card">
        <h1><?php echo $product['name']; ?></h1>
        <p class="price">Giá: <?php echo number_format($product['price']); ?> VNĐ</p>
        <p><strong>Mô tả:</strong> <?php echo $product['description']; ?></p>
    </div>
</body>
</html>