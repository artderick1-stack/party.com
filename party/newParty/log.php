<?php
include "databases.php";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $adminSql = "SELECT * FROM admins 
                 WHERE admin_username='$username' 
                 AND admin_password='$password'";

    $adminResult = mysqli_query($connection, $adminSql);

     $userSql = "SELECT * FROM userlog 
                    WHERE usernames='$username' 
                    AND pass='$password'";

        $userResult = mysqli_query($connection, $userSql);

    $queryUser = "SELECT * FROM users 
                 WHERE username='$username' 
                 AND password='$password'";
    $sqlUsers = mysqli_query($connection, $queryUser);


    if(mysqli_num_rows($adminResult) > 0){

        echo '<script>alert("Welcome Admin!");</script>';
        echo '<script>window.location.href="indexAdmin.php";</script>';

    } 
    else if(mysqli_num_rows($userResult) < 0){

        echo '<script>alert("Invalid username or password!");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }

    else if (mysqli_num_rows($userResult) > 0) {

        echo '<script>alert("Login Successful!");</script>';
        echo '<script>window.location.href="index1.php";</script>';
} 
else if(mysqli_num_rows($userResult) < 0){
            echo '<script>alert("Invalid username or password!");</script>';
            echo '<script>window.location.href="index.php";</script>';
        } 
        else if(mysqli_num_rows($sqlUsers) > 0){

        echo '<script>alert("Welcome User!");</script>';
        echo '<script>window.location.href="index1.php";</script>';

    } else {
        echo '<script>alert("Invalid username or password!");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }
    } 


?>


