<?php 
 include "databases.php";

 $queryInventory = "SELECT * FROM inventory";
 $sqlInventory = mysqli_query($connection, $queryInventory);

    $queryOrders = "SELECT * FROM orders"; 
    $sqlOrders = mysqli_query($connection, $queryOrders);

    $queryUsers = "SELECT * FROM users";
    $sqlUsers = mysqli_query($connection, $queryUsers);
?>

