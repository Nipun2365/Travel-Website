
 
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

     $sql = "INSERT INTO home_package (pk_name, description, img) VALUES ('$pk_name', '$description', '$img')";

     if (mysqli_query($connection, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }
     }

          $query = "SELECT * FROM home_package";
          $result = mysqli_query($connection, $query);
//......................... package adding end....................//
?>
 




 






 <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

<!----------------------swiper css link start---------------------->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-------------------------swiper css link end------------------------->

<!------------------font awesome cdn link start--------------------------->
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!--------------------font awesome cdn link end----------------------------->

<!----------------------custom css file link start-------------------------->
<link rel="stylesheet" href="home/home.css">
<link rel="stylesheet" href="login/login.css">
<!------------------------custom css file link end-------------------------->

<!-------------------------------footer section link to footer star---------------------------------->
<link rel="stylesheet" href="footer/footer.css">
<!-------------------------------footer section link to footer end---------------------------------->

</head> 
<body>

<!---------------------------header section starts-------------------------->
     <section class="header">  
         <a href="home.php" class="logo">travel.</a>
             <nav class="navbar">
                 <a href="home.php">home</a>
                 <a href="about.php">about</a>
                 <a href="package.php">package</a>
                 <a href="book_form.php">book</a>
                 <a href="login.php" class="logo1"><img src="images/admin.png" ></a>
             </nav>
                     <div id="menu-btn" class="fas fa fa-bars"></div>
     </section>
<!--------------------------------header section end------------------------>

<!------------------------------home section start------------------------------>

<section class="home">
     <div class="swiper home-slider">
         <div class="swiper-wrapper">
             <div class="swiper-slide slide" style="background-image: url('images/bg 1.png')">
                 <div class="content">
                     <span>explore,discover,travel</span>
                     <h3>travel around the wolrd</h3>
                     <a href="package.php" class="btn">discover more</a>
                 </div>
             </div>

             <div class="swiper-slide slide" style="background-image: url('images/bg 2.png')">
                 <div class="content">
                     <span>explore,discover,travel</span>
                     <h3>discover the new places</h3>
                     <a href="package.php" class="btn">discover more</a>
                 </div>
             </div>

             <div class="swiper-slide slide" style="background-image: url('images/bg 3.png')">
                 <div class="content">
                     <span>explore,discover,travel</span>
                     <h3>make your tour worthwhile</h3>
                     <a href="package.php" class="btn">discover more</a>
                 </div>
                </div>
         </div>
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div> 
                 <div class="swiper-pagination"></div>
    <div class="autoplay-progress"> 
      <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg> 
      <span></span>   
     </div>
     </div>
    
</section>
<!------------------------home section end------------------------------->

<!------------------------services section start--------------------------------->
<section class="services">
     <h1 class="heading-title">Our Services</h1>
         <div class="box-containe">
             <div class="boxs">
                 <img src="images/icon1.png"alt="">
                 <h2>adventure</h2>
             </div>

             <div class="boxs">
                 <img src="images/icon2.png"alt="">
                 <h2>tour guide</h2>
             </div>

             <div class="boxs">
                 <img src="images/icon3.png"alt="">
                 <h2>trekking</h2>
             </div>

             <div class="boxs">
                 <img src="images/icon4.png"alt="">
                 <h2>camp fire</h2>
             </div>

             <div class="boxs">
                 <img src="images/icon5.png"alt="">
                 <h2>off road</h2>
             </div>

             <div class="boxs">
                 <img src="images/icon6.png"alt="">
                 <h2>camping</h2>
             </div>
         </div>
</section>
<!-----------------------------services section end---------------------------->

<!-------------------------------home about section start---------------------------->
<section class="home-about">
     <div class="image">
        <img src="images/about.png" alt="">
     </div>
     <div class="contentn">
        <h3>about us</h3>
        <p>how to make complete responsive tour and travel website design using html css vanilla javascript php and mysql database from scratch.
        complete responsive travel agency / travel booking / adventure tour website design both front and backend, html css vanilla javascript php mysql step by step tutorial for beginner.
        </p>
        <a href="about.php" class="btn">read more</a>
     </div>
</section>
<!-------------------------------------home about section end------------------------------->

<!-------------------------------home packages section start--------------------------------->
<section class="home-packages">
     <h1 class="heading-title">our packages</h1>
         <div class="box-containers">
              <?php
                 if ($result && mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                         echo "<div class='boxss'>";
                         echo "<div class='images'><img src='images/" . $row["img"] . "' alt=''></div>";
                         echo "<div class='contentt'>";
                         echo "<h3>" . $row["pk_name"] . "</h3>";
                         echo "<p>" . $row["description"] . "</p>";
                         echo "<a href='book_form.php' class='btn' name='send'>Book Now</a>";
                         echo "</div></div>";
                         }
                 } else {    
                          }
             ?>
         </div>

         <?php

//......................... connect the data base start....................//
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
     if (!$connection) {
         die("Connection failed: " . mysqli_connect_error());
         }
//......................... connect the data base end....................//

//......................... package adding start....................//
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $presentage = $_POST['presentage'];
     $description = $_POST['description'];
    

     $sql = "INSERT INTO discount (presentage,description) VALUES ( '$presentage','$description')";

     if (mysqli_query($connection, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }
     }

          $query = "SELECT * FROM discount";
          $result = mysqli_query($connection, $query);
//......................... package adding end....................//
?>  
<div class="load-more">
    <a href="package.php" class="btn">load more</a>      
 </div>
</section>
<!-------------------------------home packages section end-------------------------------->

<!------------------------------home offer section start--------------------------------->
<section class="home-offer">
<div class='content1'>  
<?php
                 if ($result && mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {
                         
                        
                         echo "<h3>" . $row["presentage"] . "</h3>";
                         echo "<p>" . $row["description"] . "</p>";
                         
                        
                         }
                 } else {    
                          }
             ?>
    
<a href="book_form.php" class="btn">book now</a>
    </div>
</section>
<!----------------------------home offer section end-------------------------------->

<!-------------------------------footer section link to footer star---------------------------------->
<?php
include('footer/footer.php');
?>
<!---------------------------footer section link to footer ends-------------------------------->

<!----------------------------------swiper file link start------------------------->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!----------------------------------swiper file link end------------------------->

<!----------------------------------custom js file link start------------------------->
<script src="home/home.js"></script>
<!----------------------------------custom js file link end------------------------->

</body>
</html>