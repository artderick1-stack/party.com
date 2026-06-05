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
     <style>
        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-card h2 {
            margin-bottom: 20px;
            color: #111827;
        }
        .form-card label {
            display: block;
            margin-bottom: 8px;
            color: #374151;
        }
        .form-card input[type="text"],
        .form-card input[type="number"],
        .form-card input[type="date"],
        .form-card select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"]{
        padding: 10px;
        border: none;
        border-radius: 8px;
        color: white;
        cursor:pointer;
        background: #23cc34;
        }
        
        input[type="submit"]:hover{
        background: #2ba111;
        }
    </style>
</head>
<body>
        <div class="form-wrapper">
            <form class="form-card" action="edit.php" method="post">
                  <h1 style="text-align:center;">Edit Inventory</h1>
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