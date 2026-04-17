<?php 
    $conn = mysqli_connect("127.0.0.1","root","","lab08");

    if ($conn->connect_error) {
        die($conn->connect_error);
    }
    // echo "Connected successfull";

    $conn->close();
?>