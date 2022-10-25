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

	<div class="carousel">

		<div class="slide fade">
			<div class="content">
				<span>available now</span>
				<h3>Capricciosa Special</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-1.png" alt="">
			</div>
		</div>

		<div class="slide fade">
			<div class="content">
				<span>available now</span>
				<h3>v stacked doublecheese</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-2.png" alt="">
			</div>
		</div>

		<div class="slide fade">
			<div class="content">
				<span>available now</span>
				<h3>chimken</h3>
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

	<div class="category">
		<h1 class="title" style="text-decoration: underline solid transparent;"><b>Categories</b></h1>
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

	<div class="latest-items">
		<h1 class="title" style="text-decoration: underline solid transparent;"><b>Latest Dishes</b></h1>
		
		<div class="container">
			<!-- php stuff to view items from database -->

			<form action="" method="post" class="box">
				<!-- php stuff to add items into cart -->
			</form>
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
