<?php
    include_once '../models/productsModel.php';

    $result = allProducts();

    $output = json_encode($result);
    echo $output;
?>