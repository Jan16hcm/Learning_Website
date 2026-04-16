<?php
    require_once('database/product_db.php');
    $products = get_products();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh sách sản phẩm</h2>
        <a href="add_product.php" class="btn btn-success">Thêm sản phẩm mới</a>
    </div>

    <table class="table table-bordered table-striped bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá (VNĐ)</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= number_format($p['price']) ?></td>
                <td><?= $p['description'] ?></td>
                <td>
                    <a href="get_product.php?id=<?= $p['id'] ?>" class="btn btn-info btn-sm" target="_blank">Xem JSON</a>
                    
                    <a href="update_product.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                    
                    <a href="delete_product.php?id=<?= $p['id'] ?>" 
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>