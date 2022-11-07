<?php

include 'components/connect.php';

session_start();

// if(isset($_SESSION['user_id'])){
//    $user_id = $_SESSION['user_id'];
// }else{
//    $user_id = '';
//    header('location:home.php');
// };

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

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
        <h1>Orders</h1>
        <h3>Your Placed Orders</h3>
		<p class="menu-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
			incididunt ut labore et dolore magna aliqua. In hendrerit gravida rutrum quisque non tellus.</p>
        <p class="path">
			<a href="home.php">Home</a>
			<span> > Orders</span>
		</p>
</div>

<section class="orders">

<h1 class="title" style="text-decoration: underline solid transparent;">
		<b>Your Orders</b></h1>

   <div class="box-container">

   <?php
      // if($user_id == ''){
      //    echo '<p class="empty">please login to see your orders</p>';
      // }else{
      // code is altered for styling, 
      // needs to be corrected for when user sign in can be done
      // to view cart of another user, manually change user_id = on line 55
      $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = 1");
      $select_orders->execute();
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p>placed on : <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>name : <span><?= $fetch_orders['name']; ?></span></p>
      <p>email : <span><?= $fetch_orders['email']; ?></span></p>
      <p>number : <span><?= $fetch_orders['number']; ?></span></p>
      <p>address : <span><?= $fetch_orders['address']; ?></span></p>
      <p>payment method : <span><?= $fetch_orders['method']; ?></span></p>
      <p>your orders : <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>total price : <span>$<?= $fetch_orders['total_price']; ?>/-</span></p>
      <p>payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; }; ?>"><?= $fetch_orders['payment_status']; ?></span> </p>
      <p>order status : <span><?= $fetch_orders['order_status']; ?></span></p>
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">No Orders Placed Yet!</p>';
      }
      // }
   ?>

   </div>

</section>










<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>