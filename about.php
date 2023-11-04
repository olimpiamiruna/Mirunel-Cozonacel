<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<?php include 'header.php'; ?>

<body>
   

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images2/candy.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>
         At our shop, we're more than just a bakery. We're a haven for those who appreciate the artistry of homemade pastries and desserts
         </p>   
         <p>
         Our commitment to quality ingredients and traditional flavors reimagined with a modern twist ensures every bite is a moment of pure indulgence. Join us in savoring the sweet side of life.
         </p> 
         <a href="contact.php" class="btn">contact us</a>
      </div>


      
   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
        
         <p> Liked it very much!
         </p>   
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mihai</h3>
      </div>

      <div class="box">
      
         <p> Love to buy from here
         </p>   
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kitty</h3>
      </div>

      <div class="box">
        
        <p>Best cakes in town!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Darius</h3>
      </div>

      <div class="box">
         
         <p> Made with love for love! </p>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Miruna</h3>
      </div>

   

   </div>

</section>



<script src="js/script.js"></script>

</body>
</html>