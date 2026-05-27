<?php
    include "databases.php";
    include "get.php";

    if(isset($_POST['edit'])) {
        $editId = $_POST['upId'];
        $editProduct = $_POST['upproduct'];
        $editquantity = $_POST['upq'];
    }
    if(isset($_POST['updateSubmit'])){
        $updateId = $_POST['updateId'];
        $updateproduct = $_POST['updateproduct'];
        $upadatequantity = $_POST['updatequantity'];

        $queryUpdate = "UPDATE inventory SET inventory_id='$updateId', product='$updateproduct', product_quantity='$upadatequantity' WHERE inventory_id='$updateId'";
        $sqlUpdate = mysqli_query($connection, $queryUpdate);

        echo '<script>alert("Product updated successfully!");</script>';
        echo '<script>window.location.href = "indexAdmin.php";</script>';

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="stylead.css">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Navigation</h2>
                <a href="index.php" class="nav-button">Home</a>
            </div>
            <nav class="sidebar-nav">
                <a href="#">Inventory</a>
                <a href="#orders">Orders</a>
                <a href="#categories">Categories</a>
                <a href="#reports">Reports</a>
            </nav>
        </aside>

        <div class="container">
            <h1>Bookstore Inventory</h1>
            <p></p>
            <form class="" action="/newParty/edit.php" method="post">
             <label for="Id">Id</label>
            <input type="text" name="updateId" value="<?php echo $editId; ?>"> <br>

            <label for="Product">Product</label>
            <input type="text" name="updateproduct" value="<?php echo $editProduct; ?>"><br>

            <label for="Quantity">Quantity</label>
            <input type="text" name="updatequantity" value="<?php echo $editquantity; ?>"> <br>

            <input type="submit" value="Enter" name="updateSubmit">

            </form>
    </div>
</body>
</html>