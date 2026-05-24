<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Navigation</h2>
                <a href="#" class="nav-button">Home</a>
            </div>
            <nav class="sidebar-nav">
                <a href="index2.php">Inventory</a>
                <a href="#orders">Orders</a>
                <a href="#categories">Categories</a>
                <a href="#reports">Reports</a>
            </nav>
        </aside>

        <div class="container">
            <h1>Bookstore Inventory</h1>
            <p>Inventory management view for your bookstore. This user interface shows the available books with title, author, category, price, and stock quantity.</p>

            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Author Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Midnight Library</td>
                        <td>Matt Haig</td>
                        <td>Contemporary Fiction</td>
                        <td>$16.99</td>
                        <td><span class="status in-stock">24</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="caption">Use this clean HTML-only table layout to display your bookstore inventory information.</div>
        </div>
    </div>
</body>
</html>