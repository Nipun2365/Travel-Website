<?php
//*********************** edit button start ********************//

//...........all detail showing the edite about.php start ...........//

session_start(); //.......... Start the session to use session variables........//

//......................... Database connection start........................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$discount = []; //........ Initialize an empty array to store the about data........//

if(isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $query = "SELECT * FROM discount WHERE id='$pid'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        //......... Check if any rows were returned...........//
        if (mysqli_num_rows($result) > 0) {
            // .........Fetch the data from the result set............//
            $discount = mysqli_fetch_assoc($result);
        } else {
            echo "No about data found with ID: $pid";
        }
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}
//...........all detail showing the edite about.php end ...........//

//...................update the detail in edit about.php start........//
if(isset($_POST['send']))
{
    $description = $_POST['description'];
    $presentage = $_POST['presentage'];

    $query ="UPDATE discount SET description='$description',presentage='$presentage' WHERE id=$pid";

    $result = mysqli_query($connection, $query);

    if($result){
        $_SESSION['message'] = "update success";
        header('location:hm_dashboard.php');
        exit(0);
    }
}
//...................update the detail in edit about.php end........//

//*********************** edit button end ********************//

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
        <h1> Edit The discount </h1>
        <p>Welcome, Admin! This dashboard provides you with tools to manage your website effectively.</p>
    </div>
    <section class="form-container">
        <form action="" method="post">
            <h2>Edit discount</h2>
            <div class="ad_package">
                <textarea name="description" placeholder="Description" required><?= $about['description'] ?? ''; ?></textarea><br>
                <input type="text" name="presentage" placeholder="presentage" required value="<?= $presentage['presentage'] ?? ''; ?>"><br>
                <button type="submit" name="send" class="btn4">save </button>
            </div>
        </form>
    </section>
</body>
</html>
