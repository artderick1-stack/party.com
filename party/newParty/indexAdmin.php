<?php
    include "get.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Inventory</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');
/* Global Styles */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
    font-family: Arial, sans-serif;
    background: #f5f7fb;
    color:#111827;
    min-height:100vh;
    padding:30px;
}
.layout{
    display:flex;
    gap:30px;
    max-width:1400px;
    margin:auto;
    align-items:flex-start;
}
/* Sidebar Styles */
.sidebar{
    position: relative;          
    top: -10px;
    left: -10px;
    width: 260px;           
    height: calc(100vh - 40px);
    padding: 25px;
    overflow-y: auto; 
    background: rgba(255,255,255,0.49);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(31,38,135,0.15);
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);
    border: 1px solid rgba(255,255,255,0.3);
    display: flex;
    flex-direction: column;
}
.sidebar-header{
    margin-bottom: 30px;
}
.sidebar-header h2{
    font-family: "Ramabhadra", sans-serif;
    margin-bottom: 20px;
    color: #111827;
    text-align: center;
}
.nav-button{
    display: inline-block;
    width: 100%;
    text-align: center;
    padding: 12px;
    border-radius: 12px;
    text-decoration: none;
    color: black;
    background: white;
    transition: 0.3s ease;
    box-sizing: border-box;
}
.nav-button:hover{
    background: #8781fa;
    color: white;
}
.sidebar-nav{
    display: flex;
    flex-direction: column;
    gap: 15px;
    flex: 1;
}
.sidebar-nav a{
    text-decoration: none;
    padding: 14px 18px;
    border-radius: 14px;
    color: #111827;
    font-family: "Cossette Texte", sans-serif;
    transition: 0.3s ease;
    text-align: center;
    background: rgba(255,255,255,0.4);
}
.sidebar-nav a:hover{
    background: #8781fa; 
    color: white;
    transform: translateX(3px);
}
.sidebar-nav .active{
    background: #4f46e5;
    font-weight: bold;
    color: white;
}
.container{
    flex:1;
}

.page-title{
    margin-bottom:25px;
}

.page-title h1{
    text-align: center;
    font-size:2.3rem;
    font-family: "Ramabhadra", sans-serif;
    color:#111827;
}

.page-title p{
    text-align: center;
    margin-top:8px;
    color:#6b7280;
    font-family: "Cossette Texte", sans-serif;
}

/* Form Styles */
.form-card{
    max-width:700px;
    margin:0 200px auto;
    margin-bottom: 40px;
        background: rgba(255,255,255,0.15);
    border-radius: 24px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.25);
    box-shadow:0 8px 32px rgba(0,0,0,0.25);
    padding:30px;
    animation:fadeIn 0.6s ease;
}
/*Animations*/
@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}
/* Form Styles */
.form-card h2{
    text-align:center;
    margin-bottom:25px;
    font-family: "Ramabhadra", sans-serif;
    color:#111827;
}

.form-group{
    margin-bottom:18px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-family: "Cossette Texte", sans-serif;
    color:#374151;
}

.form-group input{
    width:100%;
    padding:13px 14px;
    border-radius:12px;
    border:1px solid #d1d5db;
    font-size:1rem;
    outline:none;
    transition:0.3s ease;
}

.form-group input:focus{
    border-color:#4f46e5;
    box-shadow:0 0 0 4px rgba(79,70,229,0.12);
}
/* Submit Button Styles */
.submit-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:14px;
    background:#4f46e5;
    color:white;
    font-size:1rem;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s ease;
}

.submit-btn:hover{
    background:#4338ca;
    transform:translateY(-2px);
}
/* Table Styles */
.table-card{
        background: rgba(255,255,255,0.15);
    border-radius: 24px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.25);
    box-shadow: 0 8px 32px rgba(0,0,0,0.25);
    padding:25px;
    overflow-x:auto;
}

.table-card h2{
    margin-bottom:20px;

    font-family: "Ramabhadra", sans-serif;
    color:#111827;
}

.inventory-table{
    width:100%;
    border-collapse:collapse;
}

.inventory-table th{
    background:#4f46e5;
    color:white;
    padding:15px;
    text-align:left;
    font-family: "Ramabhadra", sans-serif;
}

.inventory-table td{
    padding:15px;
    border-bottom:1px solid rgba(0,0,0,0.08);
    font-family: "Cossette Texte", sans-serif;
}

.inventory-table tr:hover{
    background:rgba(79,70,229,0.08);
}

.action-buttons{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.edit-btn,
.delete-btn{
    border:none;
    padding:10px 16px;
    border-radius:10px;
    color:white;
    cursor:pointer;
    transition:0.3s ease;
}

.edit-btn{
    background:#10b981;
}

.edit-btn:hover{
    background:#059669;
}

.delete-btn{
    background:#ef4444;
}

.delete-btn:hover{
    background:#dc2626;
}
/* Responsive Styles */
@media (max-width:900px){

    .layout{
        flex-direction:column;
    }

    .sidebar{
        width:100%;
        position:relative;
        top:auto;
    }

    .sidebar-nav{
        flex-direction:row;
        flex-wrap:wrap;
    }
}

@media (max-width:768px){

    body{
        padding:15px;
    }

    .page-title h1{
        font-size:1.8rem;
    }

    .form-card,
    .table-card{
        padding:20px;
    }

    .inventory-table th,
    .inventory-table td{
        padding:12px;
        font-size:0.9rem;
    }

    .action-buttons{
        flex-direction:column;
    }
}

    </style>
</head>

<body>
<!-- Admin Dashboard Layout -->
<div class="layout">
    <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Welcome Admin</h2>
                <a href="index.php" class="nav-button">Logout</a>
            </div>
            <nav class="sidebar-nav">
                <a href="#" class="active">Inventory</a>
                <a href="orders.php">Orders</a>
                <a href="registeredCustomers.php">Registered Users</a>
            </nav>
        </aside>
    <div class="container">

        <div class="page-title">
            <h1>Inventory Management</h1>
            <p>Manage your party rental products and stock quantity.</p>
        </div>
    <!-- Inventory Form and Table -->
        <div class="form-card">
            <h2>Add Inventory</h2>
            <form action="/newParty/add.php" method="post">
                <div class="form-group">
                    <label>Inventory ID</label>
                    <input type="text" placeholder="Enter inventory ID" name="id">
                </div>
                <div class="form-group">
                    <label>Product</label>
                    <input type="text" placeholder="Enter product name" name="product">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" placeholder="Enter product quantity" name="quantity">
                </div>
                <button type="submit" name="submit" class="submit-btn">Submit Inventory
                </button>
            </form>
        </div>
        <!-- Inventory Table -->
        <div class="table-card">

            <h2>Inventory Table</h2>
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Products</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <!-- Fetch and display inventory data from the database -->
                <?php while($results = mysqli_fetch_array($sqlInventory)) { ?>
                    <tr>
                        <td><?php echo $results['inventory_id']; ?></td>
                        <td><?php echo $results['product']; ?></td>
                        <td><?php echo $results['product_quantity']; ?></td>
                        <td>
                            <!-- Action buttons for editing and deleting inventory items -->
                            <div class="action-buttons">
                                <form action="edit.php" method="post">

                                    <input type="hidden" name="upId" value="<?php echo $results['inventory_id']; ?>">
                                    <input type="hidden" name="upproduct" value="<?php echo $results['product']; ?>">
                                    <input type="hidden" name="upq" value="<?php echo $results['product_quantity']; ?>">
                                    <input type="submit" value="Edit" name="edit" class="edit-btn">
                                </form>
                                <form action="/newParty/delete.php" method="post">
                                    <input type="hidden" name="DeleteId" value="<?php echo $results['inventory_id']; ?>">
                                    <input type="submit" value="Delete" name="delete" class="delete-btn">
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>