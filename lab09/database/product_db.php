<?php
    require_once('database/db.php');

    function add_product($name, $price, $desc)
    {
        $sql = "insert into product(name, price, description) values(?,?,?)";
        $conn = get_connection();

        // TODO: thực hiện prepare statement
        $stmt = $conn->prepare($sql);
        // TODO: sau đó gọi bind_param() và execute()
        $stmt->bind_param("sis", $name, $price, $desc);
        return $stmt->execute();
    }

    function get_products() {
        $sql = "select * from product";
        $conn = get_connection();
        $result = $conn->query($sql);
        $products = $result->fetch_all(MYSQLI_ASSOC);

        return $products;
    }

    function get_product($id) {
        $sql = "SELECT * FROM product WHERE id = ?";
        $conn = get_connection();

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    function update_product($id, $name, $price, $desc)
    {
        $sql = "UPDATE product SET name = ?, price = ?, description = ? WHERE id = ?";
        $conn = get_connection();

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisi",$name,$price,$desc,$id);
        return $stmt->execute();
        // TODO: viết chức năng cập nhật sản phẩm theo id
    }

    function delete_product($id)
    {
        $sql = "DELETE FROM product WHERE id = ?";
        $conn = get_connection();

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$id);
        return $stmt->execute();
        // TODO: viết chức xóa nhật sản phẩm theo id

        
    }
?>
