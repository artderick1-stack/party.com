<?php 
    include "database.php";

    if(isset($_POST['submit'])){
        $bookId = uniqid();
        $bookTitle = $_POST['bookTitle'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $stockQuantity = $_POST['stockQuantity'];

        $queryAdd = "INSERT INTO books (book_id,title,author_id,category_id,price,stock_quantity) VALUES (null,'$bookTitle','$author','$category','$price','$stockQuantity')";
        $sqlAdd = mysqli_query($connection, $queryAdd);

        echo '<script>alert("Book added successfully!");</script>';
        echo '<script>window.location.href = "index2.php";</script>';
    }
?>