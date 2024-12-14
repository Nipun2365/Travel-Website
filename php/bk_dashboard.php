<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_pannel/admin_pannel.css">
    <!--------------------------font awesome cdn link start------------------------>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--------------------------font awesome cdn link end------------------------>

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
     <h1> Welcome To bookings </h1>
     <p>Welcome, Admin! This dashboard provides you with tools to manage your website effectively.</p>
</div>

        <?php

//......................... Database connection start........................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
     if (!$connection) {
         die("Connection failed: " . mysqli_connect_error());
}
//......................... Database connection start........................//

//........................ Retrieve data from the database start..................//
$query = "SELECT * FROM book_form";
$result = mysqli_query($connection, $query);
//........................ Retrieve data from the database end..................//
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
     <table border="1">
     <thead>
    <tr>
          <th>id</th>
         <th>name</th>
         <th>email</th>
         <th>phone</th>
         <th>address</th>
         <th>location</th>
         <th>guests</th>
         <th>arrivals</th>
         <th>leaving</th>
         <th>Delete</th>
       
   





</thead>


<?php
//..................... Check if there are any bookings.................//
 if (mysqli_num_rows($result) > 0) {
    // .................Output data of each row...................//
     while ($row = mysqli_fetch_assoc($result)) {
        // ...........................Display each booking data in a table row..................//
         echo "<tr>";
         echo "<td>" . $row["id"] . "</td>";
         echo "<td>" . $row["name"] . "</td>";
         echo "<td>" . $row["email"] . "</td>";
         echo "<td>" . $row["phone"] . "</td>";
         echo "<td>" . $row["address"] . "</td>";
         echo "<td>" . $row["location"] . "</td>";
         echo "<td>" . $row["guests"] . "</td>";
         echo "<td>" . $row["arrivals"] . "</td>";
         echo "<td>" . $row["leaving"] . "</td>";
         
                 
   
         echo "<td><a href='bk_dashboard.php?pid=" . htmlentities($row['id']) . "' class='delete' title='Delete' data-toggle='tooltip' onclick='return confirm(\"Are you sure you want to delete this property?\");'><i class='fa fa-trash'></i></a></td>";

        
         echo "</tr>";
         echo "</tr>";
  
 //......................delete the data start....................//

if (isset($_GET['pid'])) {
    //..................... Get the ID from the URL parameter...............//
     $pid = intval($_GET['pid']);
            
      //...................... SQL query to delete the entry with the specified ID.................//
     $sql = "DELETE FROM `book_form` WHERE `id` = $pid";

     //................... Execute the query................//
         if (mysqli_query($connection, $sql)) {
            
            } else {
                echo "Error deleting entry: " . mysqli_error($connection);
            }
        }
    }
//..................delete the data end......................//


} else {
    echo "<tr><td colspan='9'>No bookings found.</td></tr>";
}

//....................... Close database connection......................//
mysqli_close($connection);
?>
         </tbody>
     </table>
</div>     
</body>            
</html>


 


