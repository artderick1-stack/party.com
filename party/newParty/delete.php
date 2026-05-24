<?php 
    include "databases.php";

    if(isset($_POST['delete'])) {
        $deleteId = $_POST['DeleteId'];
        $queryDelete = "DELETE FROM inventory WHERE inventory_id = '$deleteId'";
        $sqlDelete = mysqli_query($connection, $queryDelete);

        echo '<script>alert("Book deleted successfully!");</script>';
        echo '<script>window.location.href = "indexAdmin.php";</script>';
    }
?>