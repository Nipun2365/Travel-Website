
 
<?php

//......................... connect the data base start....................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
     if (!$connection) {
         die("Connection failed: " . mysqli_connect_error());
         }
//......................... connect the data base end....................//

//......................... package adding start....................//
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
     $description = $_POST['description'];
     $image = $_POST['image'];

     $sql = "INSERT INTO about ( description, image) VALUES ( '$description', '$image')";

     if (mysqli_query($connection, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }
     }

          $query = "SELECT * FROM about";
          $result = mysqli_query($connection, $query);
//......................... package adding end....................//
?>
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
<!--swiper css link-->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="about/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-------------------------------footer section link to footer star---------------------------------->
<link rel="stylesheet" href="footer/footer.css">
<!-------------------------------footer section link to footer end---------------------------------->

</head>
<body>

    <!---------------------header section starts------------------->
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
     
<!---------------------header section end------------------------>
<div class="heading" style="background:url('images/about bg.png')">
<h1>about us</h1>
</div>

<!-----------------------about section start------------------------>

<section class="about">
 <!-----------------------about details link start------------------------>   
<?php
                 if ($result && mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='image1'>";
                        echo "<image src='images/" . $row["image"] . "' alt=''>";
                        echo "</div>";
                         echo "<div class='content2'>";
                         echo"<h3>why choose us?</h3>";
                         echo "<p>" . $row["description"] . "</p>";
                         }
                 } else {    
                          }
             ?>
 <!-----------------------about details link end------------------------> 
   
  <div class="icons-container">
    <div class="icons">
        <i class="fas fa-map"></i>
<span>top destinations</span>
    </div>
    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
<span>affordable price</span>
    </div>
    <div class="icons">
        <i class="fas fa-headset"></i>
<span>24/7 guide service</span>
    </div>
  </div>

</div>
</section>
<!----------------about section end------------------>

<!------------------review section start------------------>
<section class="reviews">
<h1>client review</h1>
     <div class="swiper reviews-slider">
        
         <div class="swiper-wrapper">
             <div class="swiper-slide slide1">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                     <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.</p>
                     <h3>nipun</h3>
                     <span>traveler</span>
                     <img src="images/person.png" alt="">
             </div>
             <div class="swiper-slide slide1">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                     <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.</p>
                     <h3>Kanishka</h3>
                     <span>traveler</span>
                     <img src="images/person.png" alt="">
             </div>
             <div class="swiper-slide slide1">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                     <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.</p>
                     <h3>ranpati</h3>
                     <span>traveler</span>
                     <img src="images/person.png" alt="">
             </div>
             <div class="swiper-slide slide1">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                     <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.</p>
                     <h3>sunil</h3>
                     <span>traveler</span>
                     <img src="images/person.png" alt="">
             </div>
             <div class="sswiper-slide slide1">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                     <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.</p>
                     <h3>kamal</h3>
                     <span>traveler</span>
                     <img src="images/person.png" alt="">
             </div>
             <div class="swiper-slide slide1">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                     <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.</p>
                     <h3>nimal</h3>
                     <span>traveler</span>
                     <img src="images/person.png" alt="">
             </div>
         </div>

     </div>
</section>
<!----------------review section start---------------->

<!-------------------------------footer section link to footer star---------------------------------->
<?php
include('footer/footer.php');
?>
<!---------------------------footer section link to footer ends-------------------------------->

<!-------------------swiper js link start-------------------->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-------------------swiper js link end-------------------->

<!-----------------custom js file link start---------------------->
<script src="about/about.js"></script>
<!-----------------custom js file link end---------------------->

</body>
</html>




