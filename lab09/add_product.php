<?php
    include('database/product_db.php');
    $message = "";
    // $result = add_product('Iphone X', 1000, "Like New");

    // var_dump($result);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        if(!empty($name) && !empty($price)) {
            $result = add_product($name, $price, $desc);
            if($result) {
                header("Location: index.php");
                exit();
            } else {
                $message = "Failed save to database";
            }
        } else {
            $message = "Please enter full information";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container mt-5">

    <h2>Thêm sản phẩm mới</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price"  value="<?php echo isset($_GET['price']) ? $_GET['price'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
        </div>
        <?php if ($message != ""): ?>
            <div class="alert alert-info"><?= $message ?></div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="index.php" class="btn btn-secondary">Quay lại danh sách</a>
    </form>
</body>
</html>