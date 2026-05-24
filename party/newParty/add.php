<?php 
    include "databases.php";

    if(isset($_POST['submit'])){
        $Id = $_POST['id'];
        $product = $_POST['product'];
        $quantity = $_POST['quantity'];

        $queryAdd = "INSERT INTO `inventory`(`inventory_id`, `product`, `product_quantity`) VALUES ('$Id','$product','$quantity')";
        $sqlInventory = mysqli_query($connection, $queryAdd);

        echo '<script>alert("Product Added Successfully!");</script>';
        echo '<script>window.location.href = "indexAdmin.php";</script>';
    }
?>