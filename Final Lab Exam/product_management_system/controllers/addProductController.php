<?php
    function addProduct($name, $price, $quantity) {
        if ($name === '' | $price === '' | $quantity === '') {
            return "Please fill up all the inputs!";
        } else {
            include_once '../models/productsModel.php';
            print_r("Hello");
            $status = addProduct($name, $price, $quantity);

            if ($status === "added") {
                return "Product Added!";
            } else if ($status === "failed") {
                return 'Failed!';
            }
        }
    }
?>