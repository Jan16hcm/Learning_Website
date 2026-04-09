<?php
$conn= new mysqli("127.0.0.1","root","","lab08");

if($conn->connect_error)
    {
        die("Connected failed". $conn->connect_error);
    }
?>