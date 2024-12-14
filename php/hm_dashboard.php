<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_pannel/admin_pannel.css">
    <!--------------font awesome cdn link start------------->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 <!--------------font awesome cdn link end------------->

</head>
<body>
<div class="sidebar">
        <h2>Admin Dashboard</h2>
        <div class="item2">
        <div class="button-container2">
                <a href="dashboard.php" class="btn1">dashboard</a>
            </div>
            <div class="button-container2">
                <a href="hm_dashboard.php" class="btn1">Home</a>
            </div>
            <div class="button-container2">
                <a href="ab_dashboard.php" class="btn1">About</a>
            </div>
            <div class="button-container2">
                <a href="pk_dashboard.php" class="btn1">Package</a>
            </div>
            <div class="button-container2">
                <a href="bk_dashboard.php" class="btn1">Book</a>
            </div>
        </div>
    </div>
    <div class="script">
             <h1> Welocome To Home </h1>
              <p>Welcome, Admin! This dashboard provides you with tools to manage your website effectively.</p>
            

        </div>

</body>
</html>

</body>
</html>

<?php
//................. Database connection start................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//................. Database connection end................//

//................... Retrieve data from the database.................//
$query = "SELECT * FROM home_package";
$result = mysqli_query($connection, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
  
</head>

<body>
<div class="container">
    <h2>home package</h2>
    <table border="1">
        <thead>
            <tr>
                <th>pk_name</th>
                <th>description</th>
                <th>img</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>
    New
    <a href='add_home_package.php' class='new' title='new' data-toggle='tooltip' onclick='return confirm("Are you sure you want to add new property?");'>
        <i class='fas fa fa-plus'></i></a>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // ...................Check if there are any bookings................//
            if (mysqli_num_rows($result) > 0) {
                //............... Output data of each row.................//
                while ($row = mysqli_fetch_assoc($result)) {
                    //................... Display each booking data in a table row................//
                    echo "<tr>";
                    echo "<td>" . $row["pk_name"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["img"] . "</td>";
                    echo "<td><a href='edit_home.php?pid=" . htmlentities($row['id']) . "' class='edit' title='Edit' data-toggle='tooltip'onclick='return confirm(\"Are you sure you want to edit this property?\");'><i class='fa fa-edit'></i></a></td>";
         echo "<td><a href='hm_dashboard.php?pid=" . htmlentities($row['id']) . "' class='delete' title='Delete' data-toggle='tooltip' onclick='return confirm(\"Are you sure you want to delete this property?\");'><i class='fa fa-trash'></i></a></td>";
         echo "<td><a href='add_home.php?pid=" . htmlentities($row['id']) . "' class='new' title='new' data-toggle='tooltip' onclick='return confirm(\"Are you sure you want to add new property?\");'><i class='fas fa fa-plus'></i></a></td>";
                      echo "</tr>";
                    echo "</tr>";
                
            //...................delete the data start....................//

            if (isset($_GET['pid'])) {
                //.................... Get the ID from the URL parameter................//
                $pid = intval($_GET['pid']);
                
                //.................. SQL query to delete the entry with the specified ID................//
                $sql = "DELETE FROM `home_package` WHERE `id` = $pid";

                //.............. Execute the query.................//
                if (mysqli_query($connection, $sql)) {
                  
                } else {
                    echo "Error deleting entry: " . mysqli_error($connection);
                }
            }
        }
         //................delete the data end...................//


    } else {
        echo "<tr><td colspan='9'>No bookings found.</td></tr>";
    }
    
    //..................... Close database connection..................//
    mysqli_close($connection);
    ?>
           
        </tbody>
    </table>
</div>     
</body>

</html>









 <!--------------home discount start------------->

 <?php
//................. Database connection start................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//................. Database connection end................//

//................... Retrieve data from the database.................//
$query = "SELECT * FROM discount";
$result = mysqli_query($connection, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
  
</head>

<body>
<div class="container">
    <h2>home discount</h2>
    <table border="1">
        <thead>
            <tr>
               
                <th>description</th>
                <th>presentage</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>
    New
    <a href='add_discount.php' class='new' title='new' data-toggle='tooltip' onclick='return confirm("Are you sure you want to add new property?");'>
        <i class='fas fa fa-plus'></i></a>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // ...................Check if there are any bookings................//
            if (mysqli_num_rows($result) > 0) {
                //............... Output data of each row.................//
                while ($row = mysqli_fetch_assoc($result)) {
                    //................... Display each booking data in a table row................//
                    echo "<tr>";
                   
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["presentage"] . "</td>";
                    echo "<td><a href='edit_discount.php?pid=" . htmlentities($row['id']) . "' class='edit' title='Edit' data-toggle='tooltip'onclick='return confirm(\"Are you sure you want to edit this property?\");'><i class='fa fa-edit'></i></a></td>";
         echo "<td><a href='hm_dashboard.php?pid=" . htmlentities($row['id']) . "' class='delete' title='Delete' data-toggle='tooltip' onclick='return confirm(\"Are you sure you want to delete this property?\");'><i class='fa fa-trash'></i></a></td>";
         echo "<td><a href='add_discount.php?pid=" . htmlentities($row['id']) . "' class='new' title='new' data-toggle='tooltip' onclick='return confirm(\"Are you sure you want to add new property?\");'><i class='fas fa fa-plus'></i></a></td>";
                      echo "</tr>";
                    echo "</tr>";
                
            //...................delete the data start....................//

            if (isset($_GET['pid'])) {
                //.................... Get the ID from the URL parameter................//
                $pid = intval($_GET['pid']);
                
                //.................. SQL query to delete the entry with the specified ID................//
                $sql = "DELETE FROM `discount` WHERE `id` = $pid";

                //.............. Execute the query.................//
                if (mysqli_query($connection, $sql)) {
                  
                } else {
                    echo "Error deleting entry: " . mysqli_error($connection);
                }
            }
        }
         //................delete the data end...................//


    } else {
        echo "<tr><td colspan='9'>No bookings found.</td></tr>";
    }
    
    //..................... Close database connection..................//
    mysqli_close($connection);
    ?>
           
        </tbody>
    </table>
</div>     
</body>

</html>