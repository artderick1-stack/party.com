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

      if(isset($_POST['signup'])){
        $userId = uniqid();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

        $queryAddUser = "INSERT INTO `users`(`username`, `user_email`, `phone`, `password`) VALUES ('$username','$email','$number','$password')";
        $sqlAddUser = mysqli_query($connection, $queryAddUser);

        echo '<script>alert("User Added Successfully! Now please Login.");</script>';
        echo '<script>window.location.href = "indexLogin.php";</script>';
    }

    if(isset($_POST['submitorder'])){
        $orderId = uniqid();
        $customerName = $_POST['customer_name'];
        $customerEmail = $_POST['customer_email'];
        $customerPhone = $_POST['customer_phone'];
        $product = $_POST['order'];
        $quantity = $_POST['quantity'];
        $status = $_POST['status'];
        $paymentMethod = $_POST['payment'];
        $delivery = $_POST['delivery_rate'];
        $productPrice = $_POST['total_price'];

        $queryAddOrder = "INSERT INTO `orders`(`customer_name`, `customer_email`, `customer_phone`, `product`, `quantity`, `status`, `payment_method`, `delivery_rate`, `product_price`) VALUES ('$customerName','$customerEmail','$customerPhone','$product','$quantity','$status','$paymentMethod','$delivery','$productPrice')";
        $sqlAddOrder = mysqli_query($connection, $queryAddOrder);

        echo '<script>alert("Order Placed Successfully!");</script>';
        echo '<script>window.location.href = "index4.php";</script>';
    }
?>