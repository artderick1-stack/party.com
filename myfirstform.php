<html>
    <head>
<title> My First Form </title>
<link rel="stylesheet" href="forms.css">
</head>
<body>

    <header>
        <h1 class="head-title">Oreo's Company</h1>
    </header>
    <div class="kfc">
        <h1 class="h1">Employee Form</h1>
<form action="" method="POST">
<table class="table1" cellspacing="5" cellpadding="3" align="center">
<tr>
<td> Employee ID: </td>
<td> <input type="text" name="empid"> </td>
</tr>

<tr>
<td> First Name: </td>
<td> <input type="text" name="fname">  </td>
</tr>

<tr>
<td> Last Name: </td>
<td> <input type="text" name="lname">  </td>
</tr>

<tr>
<td> Salary: </td>
<td> <input type="number" name="salary"> </td>
</tr>
<br>

</table>
<input type="submit" class="addbtn" name="btnAdd" value="Insert">
<input type="submit" class="btn" name="btnEdit" value="Edit">
<input type="submit" class="btn" name="btnDel" value="Delete">
<input type="submit" class="btn" name="btnView" value="View">
<input type="submit" class="btn" name="btnSearch" value="Search">
<input type="reset" class="btn" name="btnReset" value="Reset" onclick="goHome()">
</form>
    </div>
<?php
$DBHost="localhost";
$DBUser="root";
$DBPassword="";
$DBName="db_employee";

$conn=mysqli_connect($DBHost, $DBUser, $DBPassword, $DBName);

if(!$conn)
{
die("Connection Failed".mysqli_error());
}

if(isset($_POST['btnAdd']))
{
$sql = "	INSERT INTO `tbl_employee`(`Employee_ID`, `Employee_First`, `Employee_Last`, `Employee_Salary`)
 VALUES ('$_POST[empid]','$_POST[fname]','$_POST[lname]','$_POST[salary]')";
$result = mysqli_query($conn,$sql);
echo "<h3 class='h3'>Recorded</h3>";
}

if(isset($_POST['btnEdit']))
{
    $sql = "UPDATE tbl_employee 
            SET Employee_First='$_POST[fname]',
                Employee_Last='$_POST[lname]',
                Employee_Salary='$_POST[salary]'
            WHERE Employee_ID='$_POST[empid]'";

    $result = mysqli_query($conn,$sql);

    if($result)
        echo "<h3 class='h3'>Record Updated</h3>";
    else
        echo "<h3 class='h3'>Update Failed</h3>";
}

if(isset($_POST['btnDel']))
{
    $sql = "DELETE FROM tbl_employee 
            WHERE Employee_ID='$_POST[empid]'";

    $result = mysqli_query($conn,$sql);

    if($result)
        echo "<h3 class='h3'>Record Deleted</h3>";
    else
        echo "<h3 class='h3'>Delete Failed</h3>";
}

if(isset($_POST['btnView']))
{
    $sql = "SELECT * FROM tbl_employee";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        echo "<h3 class='h3' align='center'>Employee Records</h3>";
        echo "<table class='tables' border='1' align='center' cellpadding='5'>";
        echo "<tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary</th>
              </tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row['Employee_ID']."</td>";
            echo "<td>".$row['Employee_First']."</td>";
            echo "<td>".$row['Employee_Last']."</td>";
            echo "<td>".$row['Employee_Salary']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    else
    {
        echo "<h3 class='h3'>No records found.</h3>";
    }
}

if(isset($_POST['btnSearch']))
{
    $sql = "SELECT * FROM tbl_employee 
            WHERE Employee_ID='$_POST[empid]'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        echo "<h3 class='h3' align='center'>Search Result</h3>";
        echo "<table class='tables' border='1' align='center' cellpadding='5'>";
        echo "<tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary</th>
              </tr>";

        echo "<tr>";
        echo "<td>".$row['Employee_ID']."</td>";
        echo "<td>".$row['Employee_First']."</td>";
        echo "<td>".$row['Employee_Last']."</td>";
        echo "<td>".$row['Employee_Salary']."</td>";
        echo "</tr>";
        echo "</table>";
    }
    else
    {
        echo "<h3 class='h3'>Employee not found.</h3>";
    }
}
?>
</body>
<script>
function goHome(){
    window.location.replace(window.location.pathname);
}
</script>
</html>

<!-- http://localhost/phpmyadmin/ -->
<!-- Username: root -->