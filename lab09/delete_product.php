<?php
    include("database/product_db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        if(delete_product($id)) {
            header("Location: index.php?status=deleted");
        } else {
            echo "Failed";
        }
    }
?>