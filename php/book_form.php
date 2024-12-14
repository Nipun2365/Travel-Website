
<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if (mysqli_query($connection, $request)) {
        echo '<script>alert("Booking submitted successfully!");';
        echo 'window.setTimeout(function() { window.location.href = "book_form.php"; }, 0);</script>';
        exit;
    } else {
        echo 'Something went wrong, please try again.';
    }
}

mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
<!--swiper css link-->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="book_form/book_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-------------------------------footer section link to footer star---------------------------------->
<link rel="stylesheet" href="footer/footer.css">
<!-------------------------------footer section link to footer end---------------------------------->

</head>
<body>





<?php
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    echo '<p>Form submitted successfully!</p>';
}
?>

    <!--------------------header section starts-------------------->
    <section class="header">
<a href="home.php" class="logo">travel.</a>
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book_form.php">book</a>
</nav>
<div id="menu-btn" class="fas fa fa-bars"></div>
    </section>
<!------------------header section end-------------------->

<div class="heading" style="background:url('images/bk bg.png')">
<h1>book</h1>
</div>

<!--------------------booking section star------------------->
<section class="booking">
    <h1 class="heading-title">book your trip</h1>
<form action="book_form.php" method ="post" class="book-form" id="bookform" >
<div class="flex">
    <div class="inputBox">
<span>name :</span>
<input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputBox">
<span>email :</span>
<input type="email" placeholder="enter your email" name="email">
</div>
<div class="inputBox">
<span>phone :</span>
<input type="number" placeholder="enter your number" name="phone">
</div>
<div class="inputBox">
<span>address :</span>
<input type="text" placeholder="enter your address" name="address">
</div>
<div class="inputBox">
<span>where to :</span>
<input type="text" placeholder="place you want to visit" name="location">
</div>
<div class="inputBox">
<span>how many :</span>
<input type="number" placeholder="number of guests" name="guests">
</div>
<div class="inputBox">
<span>arrivals :</span>
<input type="date" name="arrivals">
</div>
<div class="inputBox">
<span>leaving :</span>
<input type="date" name="leaving">
</div>
</div>
<input type="submit" value="submit"  class="btn" name="send" >

</form>
</section>

<!--------------------booking section end--------------->



<!-------------------------------footer section link to footer star---------------------------------->
<?php
include('footer/footer.php');
?>
<!---------------------------footer section link to footer ends-------------------------------->



<!--------------------swiper js link start------------->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!----------------swiper js link end-------------->

<!----------------custom js file link start--------------------->
<script src="book_form/book_form.js"></script>
<!-------------------custom js file link end------------------------>



</body>
</html>
