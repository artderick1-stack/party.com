<?php
   
    // if(isset($_POST['submit'])){
    //     $Istrue = true;
    //    $Istrue = $sqlUsers;
    //     if($_POST['username' & 'password'] != $Istrue){
    //    echo '<script>window.location.href = "index.php";</script>';
    //     }
    //     else{
    //        echo '<script>alert("Your account is not valid!");</script>';
    //     echo '<script>window.location.href = "indexLogin.php";</script>';
    //     }
    // }

// include "databases.php";

// if(isset($_POST['submit'])){

//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM userlog WHERE usernames = $username";

//     $stmt = mysqli_prepare($connection, $sql);

//     mysqli_stmt_bind_param($stmt, "s", $username);

//     mysqli_stmt_execute($stmt);

//     $result = mysqli_stmt_get_result($stmt);

//     if($row = mysqli_fetch_assoc($result)){

//         // Verify hashed password
//         if(password_verify($password, $row['password'])){

//             echo '<script>alert("Login Successful!");</script>';
//             echo '<script>window.location.href="index.php";</script>';

//         } else {

//             echo '<script>alert("Invalid Password!");</script>';
//         }

//     } else {

//         echo '<script>alert("User not found!");</script>';
//            echo '<script>window.location.href="indexLogin.php";</script>';

//     }
// }

// include "databases.php";

// if(isset($_POST['submit'])){

//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $useradmin = $_POST['username'];
//     $passadmin = $_POST['password'];

//     $sql = "SELECT * FROM userlog WHERE usernames='$username' AND pass='$password'";
//     $newsql = "SELECT * FROM admins WHERE admin_username='$useradmin' AND admin_password='$passadmin'";
//     $result = mysqli_query($connection, $sql);

//     if(mysqli_num_rows($result) > 0){

//         // Login success
//         echo '<script>alert("Login Successful!");</script>';
//         echo '<script>window.location.href="index.php";</script>';

//     } else {

//         // Login failed
//         echo '<script>alert("Invalid username or password!");</script>';
//         echo '<script>window.location.href="indexLogin.php";</script>';
//     }
// }

include "databases.php";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $adminSql = "SELECT * FROM admins 
                 WHERE admin_username='$username' 
                 AND admin_password='$password'";

    $adminResult = mysqli_query($connection, $adminSql);

   
    if(mysqli_num_rows($adminResult) > 0){

        echo '<script>alert("Welcome Admin!");</script>';
        echo '<script>window.location.href="indexAdmin.php";</script>';

    } else {

       
        $userSql = "SELECT * FROM userlog 
                    WHERE usernames='$username' 
                    AND pass='$password'";

        $userResult = mysqli_query($connection, $userSql);

       
        if(mysqli_num_rows($userResult) > 0){

            echo '<script>alert("Login Successful!");</script>';
            echo '<script>window.location.href="index.php";</script>';

        } else {

         
            echo '<script>alert("Invalid username or password!");</script>';
            echo '<script>window.location.href="indexLogin.php";</script>';
        }
    }
}

?>
?>

