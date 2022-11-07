<?php include 'components/connect.php'; ?>

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
            $select_profile = $conn->prepare("SELECT * FROM users WHERE id = 1");
            $select_profile->execute();
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="update_profile.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="../login.php" class="option-btn">login</a>
            <a href="../register.php" class="option-btn">register</a>
         </div>
         <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
      </div>
</section>
</header>

<!-- profile drop down script -->
<script type="text/javascript" src="../js/script.js"></script>