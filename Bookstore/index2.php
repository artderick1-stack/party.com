<?php
    include "get.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Inventory</title>
    <link rel="stylesheet" href="styles.css">
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
            <form class="" action="/bookstore/add.php" method="post">
            <!-- <label for="bookId">BookId</label>
            <input type="text" placeholder="Enter book ID" name="bookId"> <br> -->

            <label for="bookTitle">Title</label>
            <input type="text" placeholder="Enter book Title" name="bookTitle"> <br>

            <label for="Author">Author</label>
            <select name="author" id="author">
                <?php while($author = mysqli_fetch_assoc($sqlAuthors)) { ?>
                    <option value="<?php echo $author['author_id']; ?>"><?php echo $author['author_name']; ?></option>
                <?php } ?>
            </select> <br>

            <label for="Category">Category</label>
            <select name="category" id="category">
                <?php while($category = mysqli_fetch_assoc($sqlCategories)) { ?>
                    <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                <?php } ?>
            </select> <br>

            <label for="Price">Price</label>
            <input type="text" placeholder="Enter Price" name="price"> <br>

            <label for="Quantity">Quantity</label>
            <input type="text" placeholder="Enter book quantity" name="stockQuantity"> <br>

            <input type="submit" value="Submit" name="submit">

            </form>

            <table class="inventory-table">
                <thead>
                    <tr>
                        <!-- <th>Book ID</th> -->
                        <th>Book Title</th>
                        <th>Author Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($results = mysqli_fetch_array($sqlBooks)) { ?>
                    <tr>
                    
                        <td><?php echo $results['title']; ?></td>
                        <td><?php echo $results['author_name']; ?></td>
                        <td><?php echo $results['category_name']; ?></td>
                        <td><?php echo $results['price']; ?></td>
                        <td><span class="status in-stock"><?php echo $results['stock_quantity']; ?></span></td>
                        <td>
                            <form action="/bookstore/edit.php" method="post">
                                <input type="submit" value="Edit" name="edit"> 
                                 <input type="hidden" name="updateTitle" value="<?php echo $results['title']; ?>">
                                 <input type="hidden" name="updateAuthor" value="<?php echo $results['author_name']; ?>">
                                <input type="hidden" name="updateCategory" value="<?php echo $results['category_name']; ?>">
                                <input type="hidden" name="updatePrice" value="<?php echo $results['price']; ?>"> 
                                <input type="hidden" name="updateStockQuantity" value="<?php echo $results['stock_quantity']; ?>">
                            </form>
                            <form action="/bookstore/delete.php" method="post">
                                <input type="submit" value="Delete" name="delete">
                                <input type="hidden" name="DeleteId" value="<?php echo $results['book_id']; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="caption">Use this clean HTML-only table layout to display your bookstore inventory information.</div>
        </div>
    </div>
</body>
</html>