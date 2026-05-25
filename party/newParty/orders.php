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
                <a href="indexAdmin.php">Inventory</a>
                <a href="orders.php">Orders</a>
            </nav>
        </aside>

        <div class="container">
            <h1>Orders Dashboard</h1>
            <p></p>
               <table class="inventory-table">
                <thead>
                    <tr>
                        <!-- <th>Book ID</th> -->
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Delivery Rate</th>
                        <th>Product Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($results = mysqli_fetch_array($sqlOrders)) { ?>
                    <tr>
                        <td><?php echo $results['customer_name']; ?></td>
                        <td><?php echo $results['customer_email']; ?></td>
                        <td><?php echo $results['customer_phone']; ?></td>
                        <td><?php echo $results['product']; ?></td>
                        <td><?php echo $results['quantity']; ?></td>
                        <td><?php echo $results['status']; ?></td>
                        <td><?php echo $results['payment_method']; ?></td>
                        <td><?php echo $results['delivery_rate']; ?></td>
                        <td><?php echo $results['product_price']; ?></td>
                            <td>
                            <form action="/newParty/deleteOrder.php" method="post">
                                    <input type="submit" value="Delete" name="delete">
                                    <input type="hidden" name="DeleteId" value="<?php echo $results['order_id']; ?>">
                                </form>
                            </td>
                    </tr>
                            <?php }?>
                    </tbody>
                </table>
                <table class="inventory-table2">
                <thead>
                    <tr>
                        <th>Customers</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                        $querySales = "SELECT COUNT(DISTINCT customer_name) AS customer_count, 
                                            SUM(product_price) AS total_sales 
                                    FROM orders";

                        $sqlSales = mysqli_query($connection, $querySales);
                        $salesResults = mysqli_fetch_array($sqlSales);
                        ?>

                        <tr>
                            <td><?php echo $salesResults['customer_count']; ?></td>
                            <td><?php echo $salesResults['total_sales']; ?></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>