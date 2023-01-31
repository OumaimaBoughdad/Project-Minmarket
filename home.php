<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>


   <section class="hero">
      
   <section class="videos" style="display:flex;margin-left:-190px;margin-top:-30px;">
      <div class="vid1" >
         <video autoplay loop muted type="video/mp4" src="videos/vid1.mp4" style="width: 800px;float: left;"></video>
      </div>
      <div class="vid2" >
         <video autoplay loop muted type="video/mp4" src="videos/vid2.mp4" style=" display: flex;z-index: -1;width:800px;float: right;"></video>
      </div>
   </section>


      <div class="swiper hero-slider">

         <div class="swiper-wrapper" style="display: flex; width:fit-content;">

            <div class="swiper-slide slide" style="display:flex;">
               <div class="image">
                  <img src="images/img11.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
               <div class="image" style="padding-left: 10px;">
                  <img src="images/pic22.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
               <div class="image" style="padding-left: 10px;">
                  <img src="images/pic66.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
            </div>

            <div class="swiper-slide slide" style="display: flex; width:fit-content;">

               <div class="image">
                  <img src="images/pic33.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
               <div class="image">
                  <img src="images/pic44.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
               <div class="image">
                  <img src="images/pic2.jpg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>

            </div>

            <div class="swiper-slide slide" style="display: flex; width:fit-content;">
               <div class="image">
                  <img src="images/pic77.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
               <div class="image">
                  <img src="images/pic99.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
               <div class="image">
                  <img src="images/pic88.jpeg" alt="" style="width:380px;padding-left:15px;height:500px;">
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>
   <section class="products">

      <h1 class="title">latest Fashiom</h1>

      <div class="box-container">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" method="post" class="box">
                  <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                  <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                  <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                  <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
                  <div class="name"><?= $fetch_products['name']; ?></div>
                  <div class="flex">
                     <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
                     <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                  </div>
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>

      </div>

      <div class="more-btn">
         <a href="menu.php" class="btn">veiw all</a>
      </div>

   </section>









   <section class="category">

      <h1 class="title">clothes category</h1>

      <div class="box-container">

         <a href="category.php?category=Electronics" class="box">
            <img src="images/elecpng.png" alt="">
            <h3>Electronics</h3>
         </a>

         <a href="category.php?category=Accessories" class="box">
            <img src="images/acc1.png" alt="">
            <h3>Accessories</h3>
         </a>

         <a href="category.php?category=Clothes" class="box">
            <img src="images/clothes.png" alt="">
            <h3>Clothes</h3>
         </a>

         <a href="category.php?category=Books" class="box">
            <img src="images/books.png" alt="">
            <h3>Books</h3>
         </a>

      </div>

   </section>















   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".hero-slider", {
         loop: true,
         grabCursor: true,
         effect: "flip",
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });
   </script>

</body>

</html>