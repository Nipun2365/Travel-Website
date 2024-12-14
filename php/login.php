
<?php
session_start();

//......................... connect the data base start....................//
$db_name = 'book_db';
$user_name = 'root';
$password = ''; 
//......................... connect the data base end....................//

//............................. Check if form is submitted...............................//
if(isset($_POST['submit'])){
    try {

        //........................ Establish a database connection using PDO.................//
        $conn = new PDO("mysql:host=localhost;dbname=$db_name", $user_name, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //......................... Sanitize input..................//
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        
        //......................... Prepare and execute the query.....................//
        $select_admin = $conn->prepare("SELECT * FROM `ad_form` WHERE email = ? AND password = ?");
        $select_admin->execute([$email, $password]);
        
        //.................. Check if admin exists.........................//
        if($select_admin->rowCount() > 0) {
            $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
            $_SESSION['admin_id'] = $fetch_admin_id['id'];
            header('location: dashboard.php');
            exit;
        } else {
            $message[] = 'Incorrect email or password';
        }
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!--------------------------------- font awesome cdn link strat  ----------------------------->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 <!--------------------------------- font awesome cdn link end  ----------------------------->

   <!---------------------- custom css file link start -------------------------->
   <link rel="stylesheet" href="login/login.css">
 <!---------------------- custom css file link end -------------------------->

</head>
<body> 
<?php if(isset($message)) { ?>
           <p><?php echo implode('<br>', $message); ?></p>
       <?php } ?>

 <!---------------------- login form start -------------------------->     
<section class="form-container">
     <form action="" method="post">
         <h3>Login now</h3>
             <div class="input-group">
                 <input type="email" name="email" class="box2" placeholder="Enter your email" required>
             </div>
             <div class="input-group">
                 <input type="password" name="password" class="box2" placeholder="Enter your password" required>
             </div>
                 <button type="submit" class="btn3" name="submit">Login now</button>
     </form>
</section>
 <!---------------------- login form end --------------------------> 

</body>
</html>


