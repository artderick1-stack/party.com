<?php
    include "database.php";
    $queryBooks = "SELECT books.book_id,books.title,author.author_name,categories.category_name,books.price,books.stock_quantity
                    FROM books
                    INNER JOIN author ON books.author_id = author.author_id
                    INNER JOIN categories ON books.category_id = categories.category_id;";
    $sqlBooks = mysqli_query($connection, $queryBooks);

    $queryAuthors = "SELECT * FROM author;";
    $sqlAuthors = mysqli_query($connection, $queryAuthors);

    $queryCategories = "SELECT * FROM categories;";
    $sqlCategories = mysqli_query($connection, $queryCategories);
    ?>