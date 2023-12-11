<?php
    include_once 'db.php';

    function allProducts() {
        $con = getConnection();
        $sql = "select * from products";
        $result = mysqli_query($con, $sql);
        $products = [];
        
        while($product = mysqli_fetch_assoc($result)){
            array_push($products, $product);
        }
        
        return $products;
    }

    function addProduct($name, $price, $quantity) {
        // $con = getConnection();
        // print_r($con);
        // $sql = "INSERT INTO products(name, price, quantity) VALUES('{$name}', '{$price}' , '{$quantity}');";
        // $result = mysqli_query($con, $sql);
        
        // if($result) {
        //     return 'added';
        // } else {
        //     return 'failed';
        // }
        print_r("Hello");
    }
?>