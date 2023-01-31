<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading" >
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="content" style="text-align: center;">
         <h3>why choose us?</h3>
         <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:25px;">Why choose us? <br>
If you're looking for branded and promotional clothing, it's worth choosing your supplier with care. With Brand My Clothing you'll enjoy the best possible products, quality, service and support – guaranteed!
<br><br>
Outstanding products at competitive prices
we never compromise on quality
We're proud to develop enduring supplier relationships that keep quality high and prices keen. We’ll never cut corners: instead, we’ll take the extra steps that keep our customers happy, time after time.
<br><br>
Orders of any size welcome
from small consignments to many thousands
With huge stock levels, we can service organisations of all sizes, from small businesses to large schools and colleges, government bodies and global brands. At Brand My Clothing, consignment volume and delivery distance are no object!
<br><br>
Superb in-house design and production facilities
for best possible results – fast!
With huge stock levels, we can service organisations of all sizes, from small businesses to large schools and colleges, government bodies and global brands. At Brand My Clothing, consignment volume and delivery distance are no object!
<br><br>
Friendly, helpful and professional service
capability, flexibility and unwavering attention to detail.
At Brand My Clothing we combine all the convenience of online selection and ordering with the best in personal, attentive customer care. Why wouldn't we? By being the best, our reputation grows and grows. Everyone’s happy!</p>
         <a href="menu.php" class="btn">our Products</a>
      </div>

   </div>

</section>

<!-- about section ends -->



<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="height: 400px;border-radius:15px;">
            <img src="images/pic-1.png" alt="">
            <p>BKB is a great place to shop if you're looking for affordable fast fashion but. If the item doesn't have any reviews then you're definitely taking a gamble.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>walid kacimi</h3>
         </div>

         <div class="swiper-slide slide" style="height: 400px;border-radius:15px;">
            <img src="images/pic-2.png" alt="">
            <p>I ordered 2 pairs of flip flops, I love them & will definitely order some more. Quick delivery, no problems whatsoever.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>malak Benyaich</h3>
         </div>

         <div class="swiper-slide slide" style="height: 400px;border-radius:15px;">
            <img src="images/pic-3.png" alt="">
            <p>I have ordered many items from this company and never had any trouble returning. I’ve found the quality and price very good so far and will continue to order more.
Highly recommended</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ahmed Boughdad</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>