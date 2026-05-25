<?php
    include "get.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Inventory</title>
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
                <a href="orders.php">Orders</a>
            </nav>
        </aside>

        <div class="container">
            <h1>Inventory</h1>
            <p></p>
            <form class="" action="/newParty/add.php" method="post">
            <!-- <label for="bookId">BookId</label>
            <input type="text" placeholder="Enter book ID" name="bookId"> <br> -->

            <label for="bookTitle">Inventory ID</label>
            <input type="text" placeholder="Enter inventory id" name="id"> <br>

            <label for="Price">Product</label>
            <input type="text" placeholder="Enter product" name="product"> <br>

            <label for="Quantity">Quantity</label>
            <input type="text" placeholder="Enter product quantity" name="quantity"> <br>

            <input type="submit" value="Submit" name="submit">

            </form>

               <table class="inventory-table">
                <thead>
                    <tr>
                        <!-- <th>Book ID</th> -->
                        <th>id</th>
                        <th>Products</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($results = mysqli_fetch_array($sqlInventory)) { ?>
                    <tr>
                    
                        <td><?php echo $results['inventory_id']; ?></td>
                        <td><?php echo $results['product']; ?></td>
                        <td><?php echo $results['product_quantity']; ?></td>
                                
                        <td> 
                         <form action="/newParty/edit.php" method="post">
                                <input type="submit" value="Edit" name="edit"> 
                                 <input type="hidden" name="upId" value="<?php echo $results['inventory_id']; ?>">
                                 <input type="hidden" name="upproduct" value="<?php echo $results['product']; ?>">
                                <input type="hidden" name="upq" value="<?php echo $results['product_quantity']; ?>">
                         </form>

                        <form action="/newParty/delete.php" method="post">
                                <input type="submit" value="Delete" name="delete">
                                <input type="hidden" name="DeleteId" value="<?php echo $results['inventory_id']; ?>">
                            </form>
                        </td></td>
                    </tr>
                            <?php }?>
                    </tbody>
                </table>
   
    </div>
</body>
</html>