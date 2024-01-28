<?php
    // $id = $_POST['id'];
    // $name = $_POST['name'];
    // $quantity = $_POST['quantity'];
    
    $conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'products');

    $sql = "select * from products.tbproduct";
    $result = $conn->query($sql);


