<?php 

include 'components/connect.php'; 

?>

<header class="header">
	<section class="nav">
		<a href="home.php" class="logo">
			<img src="images/mealdash_logo.png" alt="Meal Dash" style="width: 40%;">
		</a>
		<nav class="navbar">
			<a href="home.php">Home</a>
			<a href="about.php">About</a>
			<a href="menu.php">Menu</a>
			<a href="contact.php">Contact Us</a>
			<a href="orders.php">Orders</a>
		</nav>
		<div class="icons">
			<a href="search.php"><i class="fas fa-search"></i></a>
			<a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
			<div id="user-btn" class="fas fa-user"></div>
		</div>
		<div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         
            <a href="profile.php" class="btn">Profile</a>
            <a href="components/user_logout.php" onclick="return confirm('Logout from this website?');" class="btn">Logout</a>
         <?php
            }else{
         ?>
            <p class="name">Please Login First!</p>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
         <?php
          }
         ?>
      </div>
</section>
</header>

<!-- profile drop down script -->
<script type="text/javascript" src="../js/script.js"></script>