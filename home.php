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

	<div class="carousell-container">

		<div class="slide fade">
			<div class="content">
				<span>Available Now</span>
				<h3>Capricciosa Special</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-1.png" alt="">
			</div>
		</div>
		<div class="slide fade">
			<div class="content">
				<span>Available Now</span>
				<h3>v stacked doublecheese</h3>
				<a href="menu.php" class="btn">View Menu</a>
			</div>
			<div class="image">
				<img src="images/home-img-2.png" alt="">
			</div>
		</div>
		<div class="slide fade">
			<div class="content">
				<span>Available Now</span>
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

</body>

<footer>
	Copyright &copy; 2022 <a href="">Meal Dash</a>
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
