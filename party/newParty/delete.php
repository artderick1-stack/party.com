<?php 
    include "databases.php";

    if(isset($_POST['delete'])) {
        $deleteId = $_POST['DeleteId'];
        $queryDelete = "DELETE FROM inventory WHERE inventory_id = '$deleteId'";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        echo '<script>alert("Inventory deleted successfully!");</script>';
        echo '<script>window.location.href = "indexAdmin.php";</script>';
    }

    if(isset($_POST['deleteOrder'])) {
        $deleteId = $_POST['DeleteId'];
        $queryDelete = "DELETE FROM orders WHERE order_id = '$deleteId'";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        echo '<script>alert("Order deleted successfully!");</script>';
        echo '<script>window.location.href = "orders.php";</script>';
    }

    if(isset($_POST['deleteUser'])) {
        $deleteId = $_POST['DeleteId'];
        $queryDelete = "DELETE FROM users WHERE user_id = '$deleteId'";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        echo '<script>alert("User deleted successfully!");</script>';
        echo '<script>window.location.href = "registeredCustomers.php";</script>';
    }
?>