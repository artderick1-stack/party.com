<?php
    include "databases.php";
    include "get.php";

   
    if(isset($_POST['editStatus'])) {
        $editId = $_POST['order_id'];
        $editStatus =$_POST['status'];
    }
    if(isset($_POST['statusSubmit'])){
        $updateId = $_POST['updateId'];
       $upadateStatus = $_POST['updatestatus'];

        $queryeditStatus = "UPDATE orders SET status='$upadateStatus' WHERE order_id='$updateId'";
        $sqlStatus = mysqli_query($connection, $queryeditStatus);

        echo '<script>alert("Status updated successfully!");</script>';
        echo '<script>window.location.href = "orders.php";</script>';

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
       
            <form class="form-card" action="editStatus.php" method="post">
                 <h1 style="text-align: center;">Edit Status</h1>
            <input type="hidden" name="updateId" value="<?php echo $editId; ?>"> <br>
            <label for="Status">Status</label>
            <?php $results = mysqli_fetch_array($sqlOrders); ?>
              <select type="hidden" name="updatestatus" class="form-select" required>
                                        <option value="" <?= $results['status']==''? 'selected':'' ?>>Choose...</option>
                                        <option value="pending" <?= $results['status']=='pending'? 'selected':'' ?>>Pending</option>
                                        <option value="confirmed" <?= $results['status']=='confirmed'? 'selected':'' ?>>Confirmed</option>
                                        <option value="cancelled" <?= $results['status']=='cancelled'? 'selected':'' ?>>Cancelled</option>
                                    </select>
                                    
            <input type="submit" value="Enter" name="statusSubmit">
            </form>
    </div>
</body>
</html>