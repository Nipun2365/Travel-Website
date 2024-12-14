<?php
//************************ add button start***********************//

//..................... Database connection start...............//
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//..................... Database connection end...............//

$pk_name="";
$description = "";
$img = "";

//.............. Process form submission...............//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $pk_name=$_POST['pk_name'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    //............... Insert data into database...............//
    
    $sql = "INSERT INTO packages (pk_name,description, img) VALUES ('$pk_name','$description', '$img')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location:pk_dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

//************************ add button start***********************//

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_pannel/admin_pannel.css">
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
             <h1> Update The Package </h1>
              <p>Welcome, Admin! This dashboard provides you with tools to manage your website effectively.</p>

        </div>
        <section class="form-container">
        <form action="" method="post">
    <h2>Add New Package</h2>
    <div class="ad_package">
        <input type="text" name="pk_name" placeholder="Package Name" required><br>
        <textarea name="description" placeholder="Description" required></textarea><br>
        <input type="file" name="img" required><br>
        <button type="submit" name="send" class="btn4">Add </button>
    </form>
</section>
</body>
</html>