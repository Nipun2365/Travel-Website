 
<?php

//......................... connect the data base start....................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
     if (!$connection) {
         die("Connection failed: " . mysqli_connect_error());
         }
//......................... connect the data base end....................//

//......................... package adding start....................//
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $pk_name = $_POST['pk_name'];
     $description = $_POST['description'];
     $img = $_POST['img'];

     $sql = "INSERT INTO packages (pk_name, description, img) VALUES ('$pk_name', '$description', '$img')";

     if (mysqli_query($connection, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }
     }

          $query = "SELECT * FROM packages";
          $result = mysqli_query($connection, $query);
//......................... package adding end....................//
?>




 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>
<!-----------------------swiper css link start--------------------------->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-----------------------swiper css link end--------------------------->

<!-------------------------------font awesome cdn link start---------------------------->
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-------------------------------font awesome cdn link end---------------------------->

<!--------------------------custom css file link start--------------------------->
<link rel="stylesheet" href="package/package.css">
<!--------------------------custom css file link end--------------------------->

<!-------------------------------font awesome cdn link start---------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-------------------------------font awesome cdn link end---------------------------->

<!-------------------------------footer section link to footer star---------------------------------->
<link rel="stylesheet" href="footer/footer.css">
<!-------------------------------footer section link to footer end---------------------------------->

</head>
<body>

<!-----------------------------header section starts------------------------->
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
     <div class="heading" style="background:url('images/pk bg.png')">
         <h1>package</h1>
     </div>
<!--------------------------------header section end------------------------>

<!------------------------------------packges section start----------------------------->
 <section class="package">
     <h1 class="heading-title">top destination</h1>
         <div class="box-container1">
             <?php
                 if ($result && mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                         echo "<div class='box1'>";
                         echo "<div class='image2'><img src='images/" . $row["img"] . "' alt=''></div>";
                         echo "<div class='content2'>";
                         echo "<h3>" . $row["pk_name"] . "</h3>";
                         echo "<p>" . $row["description"] . "</p>";
                         echo "<a href='book_form.php' class='btn' name='send'>Book Now</a>";
                         echo "</div></div>";
                         }
                 } else {    
                          }
             ?>
         </div>
     <div class="loadmore"><button class="btn1">load more</button></div>
 </section>
<!------------------------------------packges section end-------------------------------->

<!-------------------------------footer section link to footer star---------------------------------->
<?php
include('footer/footer.php');
?>
<!---------------------------footer section link to footer ends-------------------------------->

<!----------------------swiper js link start---------------------------->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-----------------------swiper js link end-------------------->

<!-----------------------------custom js file link start----------------------------->
<script src="package/package.js"></script>
<!-------------------------custom js file link end------------------------>

</body>
</html>