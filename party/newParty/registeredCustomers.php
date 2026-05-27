<?php
    include "get.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Inventory</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');
/* Global Styles */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body{
    overflow-x: hidden;
}

body{
    font-family: Arial, sans-serif;
    background: #f4f7fb;
    min-height: 100vh;
    padding: 20px;
    color: #111827;
}
.layout{
    display: flex;
    gap: 25px;
    max-width: 1400px;
    margin: auto;
    align-items: flex-start;
}
/* Sidebar Styles */
.sidebar{
    position: fixed;       
    top: 20px;
    left: 20px;
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

/* HEADER */
.sidebar-header{
    margin-bottom: 30px;
}

.sidebar-header h2{
    font-family: "Ramabhadra", sans-serif;
    margin-bottom: 20px;
    color: #111827;
}

/* button */
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

/* Sidebar Navigation */
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
/* Main Content Styles */
.container{
    width: 100%;
    margin-left: 320px;
    padding: 20px;
    background: rgba(255,255,255,0.49);
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(31,38,135,0.15);
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);
    border: 1px solid rgba(255,255,255,0.3);
    /* padding: 35px; */
    animation: fade 0.6s ease;
}
/* Animations */
@keyframes fade{
    from{
        opacity: 0;
        transform: translateY(20px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}

.container h1{
    font-family: "Ramabhadra", sans-serif;
    margin-bottom: 25px;
    font-size: 2rem;
    padding-left: 30px;
    padding-top: 20px;
    color: #111827;
}
/* Table Styles */
.inventory-table,
.inventory-table2{
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    border-radius: 18px;
    margin-top: 20px;

    background: rgba(255,255,255,0.35);
    backdrop-filter: blur(8px);
}

.inventory-table th,
.inventory-table td,
.inventory-table2 th,
.inventory-table2 td{
    padding: 16px;
    text-align: left;
}

.inventory-table th{
    background: rgba(79,70,229,0.9);
    color: white;
    font-family: "Ramabhadra", sans-serif;
}
.inventory-table2 th{
    background: green;
    color: white;
    font-family: "Ramabhadra", sans-serif;
}
.inventory-table tr:nth-child(even),
.inventory-table2 tr:nth-child(even){
    background: rgba(255,255,255,0.25);
}

.inventory-table tr:hover,
.inventory-table2 tr:hover{
    background: rgba(255,255,255,0.5);
}

.inventory-table td form{
    margin: 0;
    padding: 0;
    background: transparent;
    box-shadow: none;
}

.inventory-table td input[type="submit"]{
    width: auto;
    padding: 10px 16px;
    margin: 5px 5px 5px 0;
    border-radius: 10px;
    font-size: 14px;
    border: none;
    border-radius: 12px;
    color: white;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
}

.inventory-table td input[value="Delete"]{
    background: #dc2626;
}

.inventory-table td input[value="Delete"]:hover
{
    background: #b91c1c;
}
p{
    padding-left: 30px;
    color: #111827;
}
.stats{
    background: rgba(0, 252, 8, 0.35);
    border-radius: 18px;
    margin: 30px;
}
/* Responsive Styles */
@media (max-width: 1024px){

    .layout{
        flex-direction: column;
    }

    .sidebar{
        width: 100%;
        position: relative;
        top: 0;
    }

    .container{
        width: 100%;
    }
}

@media (max-width: 768px){

    body{
        padding: 10px;
    }

    .container{
        padding: 20px;
    }

    .container h1{
        font-size: 1.6rem;
        text-align: center;
    }

    form{
        padding: 20px;
    }

    .inventory-table,
    .inventory-table2{
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }

    .sidebar-nav a{
        text-align: center;
    }
}

@media (max-width: 480px){

    .sidebar{
        padding: 20px;
    }

    .container{
        padding: 15px;
    }

    form{
        padding: 15px;
    }

    form input[type="text"]{
        font-size: 14px;
    }

    .inventory-table th,
    .inventory-table td,
    .inventory-table2 th,
    .inventory-table2 td{
        padding: 12px;
        font-size: 13px;
    }
}
    </style>
</head>
<body>
    <!-- Layout Container -->
    <div class="layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Navigation</h2>
                <a href="index.php" class="nav-button">Logout</a>
            </div>
            <nav class="sidebar-nav">
                <a href="indexAdmin.php">Inventory</a>
                <a href="orders.php">Orders</a>
                <a href="#" class="active">Registered Users</a>
            </nav>
        </aside>
        <!-- Main Content -->
        <div class="container">
            <h1>Registered Users</h1>
            <p>Manage your registered users</p>
               <table class="inventory-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th>User Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fetch and display registered user data from the database -->
                    <?php while($results = mysqli_fetch_array($sqlUsers)) { ?>
                    <tr>
                        <td><?php echo $results['username']; ?></td>
                        <td><?php echo $results['user_email']; ?></td>
                        <td><?php echo $results['phone']; ?></td>
                        <td><?php echo $results['password']; ?></td>
                            <td>
                            <form action="delete.php" method="post">
                                    <input type="submit" value="Delete" name="deleteUser">
                                    <input type="hidden" name="DeleteId" value="<?php echo $results['user_id']; ?>">
                                </form>
                            </td>
                    </tr>
                            <?php }?>
                    </tbody>
                </table>
        </div>
    </div>

</body>
</html>