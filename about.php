<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/nav_header.php'; ?>
<!-- header section ends -->


<div class="heading">
		<!-- <i class="fa-solid fa-dash"></i> -->
        <h1>Find Out More About Meal Dash</h1>
        <h3>About Us</h3>
		<p class="menu-desc">See what people have to say about us or find out how you can order your food quickly.</p>
        <p class="path">
			<a href="home.php">Home</a>
			<span> > About</span>
		</p>
</div>


<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="content">
         <h3 style=""><br><br>Why Choose Us?</h3>
         <p>We're Singapore's no. 1 food delivery service  - offering islandwide free delivery, updates on where your food is and top notch customer support to solve all your problems. <br>What're you waiting for? Check out our full menu and start ordering your favourite dishes!<br></p>
         <a href="menu.php" class="btn">Our Menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title"><br>Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Order</h3>
         <p>Add your favourite dishes to cart. <br>We even have drinks and desserts!</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p>Place your order, sit back and relax while we prepare it and deliver it to you.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Your Food</h3>
         <p>Dig in! If there are any concerns, contact us and we'd be glad to help out!</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<div class="testimonials">
      <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="images/pic-1.png" alt="">
              <div class="name">James Carter</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                I love ordering via Meal Dash! They have exxcellent customer service which is always quick to respond.
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="images/pic-2.png" alt="">
              <div class="name">Mary Seld</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                Meal Dash has some of the yummiest dishes and the one of the fastest food delivery services in Singapore. It has become my GO TO every day.
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="images/pic-3.png" alt="">
              <div class="name">John Lee</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                Be it catering for a large order or simple dinners with my family, Meal Dash never fails to deliver excellent service, delicious food and the best desserts to end the night well.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

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