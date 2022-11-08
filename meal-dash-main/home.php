<!-- database connection -->
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
	<title>Meal Dash</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/stylesheet.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

	<?php include 'components/nav_header.php'; ?>
	
	<!-- confirmation message -->
	<?php
	if(isset($message)){
	foreach($message as $message){
		echo '
		<div class="message">
			<span>'.$message.'</span>
			<i class="fas fa-times" onclick="this.parentElement.remove();"></i>
		</div>
		';
	}
	}
	?>

	<!-- carousel  -->
	<div class="carousel">

		<div class="slide fade">
			<div class="content">
				<span>Available now!</span>
				<h3>Capricciosa Special</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-1.png" alt="">
			</div>
		</div>

		<div class="slide fade">
			<div class="content">
				<span>Available now!</span>
				<h3>Very Stacked Doublecheese</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-2.png" alt="">
			</div>
		</div>

		<div class="slide fade">
			<div class="content">
				<span>Available now!</span>
				<h3>Roast Full Chicken</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-3.png" alt="">
			</div>
		</div>
	</div>
	<br> 
	<!-- carousell dots -->
	<div style="text-align:center">
		<span class="dot"></span> 
		<span class="dot"></span> 
		<span class="dot"></span> 
	</div>

	<!-- category buttons -->
	<div class="category">
		<h1 class="title" style="text-decoration: underline solid transparent; color: white;"><b>Categories</b></h1>
		<div class="container">

			<a href="category.php?category=sides" class="box">
				<img src="images/cat-1.png" alt="">
				<h3>Side Dishes</h3>
      		</a>

			<a href="category.php?category=mains" class="box">
				<img src="images/cat-2.png" alt="">
				<h3>Main Dishes</h3>
      		</a>

			<a href="category.php?category=drinks" class="box">
				<img src="images/cat-3.png" alt="">
				<h3>Drinks</h3>
      		</a>

			<a href="category.php?category=desserts" class="box">
				<img src="images/cat-4.png" alt="">
				<h3>Desserts</h3>
      		</a>
		</div>
	</div>

	<!-- latest products -->
	<div class="products">
		<h1 class="title" style="text-decoration: underline solid transparent;">
		<b>Latest Dishes</b></h1>
		
		<div class="container">
			<!-- php to view 6 latest products from database -->
			<?php
				$select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
				$select_products->execute();
				if($select_products->rowCount() > 0){
					while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
			?>
			<form action="" method="post" class="box">
				<input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
				<input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
				<input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
				<input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
				<a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
				<!-- <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button> -->
				<img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
				<div class="name"><?= $fetch_products['name']; ?></div>
				<a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
				<div class="flex">
					<div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
					<input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
				</div>
				<div class="add-to-cart">
					<button type="submit" class="add-btn" name="add_to_cart">Add to Cart</button>
				</div>
			</form>
			<?php
					}
				}else{
					echo '<p class="empty">no products added yet!</p>';
				}
			?>

			
		</div>

		<div class="more-btn">
			<a href="menu.php" class="btn">View Full Menu</a>
		</div>
	</div>

</body>

<footer>
	 <br><br><?php include 'components/footer.php'; ?> 
</footer>

</html>

<!-- carousell javascript -->
<script>
	let slideIndex = 0;
	showSlides();

	function showSlides() {
	let i;
	let slides = document.getElementsByClassName("slide");
	let dots = document.getElementsByClassName("dot");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	}
	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1}    
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";  
	dots[slideIndex-1].className += " active";
	setTimeout(showSlides, 4000); // Change image every 4 seconds
	}
</script>


<!-- profile drop down script -->
<script type="text/javascript" src="js/script.js"></script>