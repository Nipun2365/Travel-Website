<?php
//*********************** edit button start ********************//

//...........all detail showing the edite package.php start ...........//

session_start(); //.......... Start the session to use session variables........//

//......................... Database connection start........................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$packages= []; //........ Initialize an empty array to store the package data........//

if(isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $query = "SELECT * FROM packages WHERE id='$pid'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        //......... Check if any rows were returned...........//
        if (mysqli_num_rows($result) > 0) {
            // .........Fetch the data from the result set............//
            $packages = mysqli_fetch_assoc($result);
        } else {
            echo "No about data found with ID: $pid";
        }
    } else {
        echo "Error executing query: " . mysqli_error($connection);
    }
}
//...........all detail showing the edite package.php end ...........//

//...................update the detail in edit about.php start........//
if(isset($_POST['send']))
{
    $pk_name = $_POST['pk_name'];
    $description = $_POST['description'];

    // File upload handling
    $target_directory = "uploads/"; // Directory where uploaded images will be stored
    $target_file = $target_directory . basename($_FILES["image"]["name"]); // Path of the uploaded file
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Get the file extension

    // Check if the file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        // Allow certain file formats
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if(in_array($imageFileType, $allowed_extensions)){
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        echo "File is not an image.";
    }

    // Update the database with the new image file name (if uploaded successfully)
    $img = basename($_FILES["image"]["name"]);
    $query ="UPDATE packages SET pk_name='$pk_name',description='$description', img='$img' WHERE id=$pid";

    $result = mysqli_query($connection, $query);

    if($result){
        $_SESSION['message'] = "update success";
        header('location:pk_dashboard.php');
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
             <h1> Update The Package </h1>
              <p>Welcome, Admin! This dashboard provides you with tools to manage your website effectively.</p>

        </div>
        <section class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
        <h2>Edit Package</h2>
<div class="ad_package">
    <input type="text" name="pk_name" placeholder="Package Name" required value="<?= $packages['pk_name'] ?? ''; ?>"><br>
    <textarea name="description" placeholder="Description" required><?= $packages['description'] ?? ''; ?></textarea><br>
    <input type="file" name="image" required><br> <!-- Input field for uploading image -->
    <button type="submit" name="send" class="btn4">Save</button>
</div>
</form>
</section>
</body>
</html>
